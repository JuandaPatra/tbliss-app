<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Hidden_gem;
use App\Models\Place_categories;
use App\Models\Place_trip_categories;
use App\Models\place_trip_categories_cities;
use App\Models\Trip_categories;
use App\Models\Trip_cities_hidden_gem_hashtag;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Alert;
use App\Models\Cart;
use App\Models\Payment;
use App\Models\User;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Mail;
use PDF;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {

        ///// negara default adalah korea 
        $id = 'korea';

        ///// kirim id ke halaman home
        return redirect()->route('home.country', $id);
    }

    public function country($id)
    {
        $slug = $id;

        ////mendapatkan id negara dari parameter yang dikirim (default 6 =>korea)
        $country = Place_categories::whereSlug($slug)->where('status', 'publish')->first();

        //// mendapatkan trip berdasarkan negara
        $trips = Trip_categories::with(['place_trip_categories:id,place_categories_id,trip_categories_id',])->whereHas('place_trip_categories', function (Builder $query) use ($country) {
            $query->where('place_categories_id', $country->id);
        })->where('date_from', '>', date("Y-m-d",time()+3600*24*90))->get(['id', 'title', 'slug', 'price', 'day', 'night', 'date_from', 'date_to', 'thumbnail', 'seat',]);
        // return $trips;
        $trips = Trip_categories::with(['place_trip_categories:id,place_categories_id,trip_categories_id',])->whereHas('place_trip_categories', function (Builder $query) use ($country) {
            $query->where('place_categories_id', $country->id);
        })->get(['id', 'title', 'slug', 'price', 'day', 'night', 'date_from', 'date_to', 'thumbnail', 'seat',]);
        // return $trips;

        //// mendapatkan list negara di halaman home
        $hiddenGemId = Place_categories::where('parent_id', '=', $country->id)->get(['id', 'title', 'parent_id']);

        //// mendapatkan list hidden gem di halaman home
        $hiddenGems = Hidden_gem::whereIn('places_id', $hiddenGemId->pluck('id'))->where('status', 'publish')->get([
            'title',
            'slug',
            'image_desktop',
            'image_mobile',
            'places_id'
        ]);
        return view('web.home.index', compact('trips', 'country', 'hiddenGems', 'hiddenGemId'));
    }

    public function detail($id, $trip)
    {
        //// ambil detail trip
        $detailTrip = Trip_categories::with(['place_trip_categories:id,trip_categories_id,place_categories_id', 'place_trip_categories.place_categories:id,title,slug', 'place_trip_categories_cities:id,trip_categories_id,place_categories_id', 'place_trip_categories_cities.place_categories:id,title', 'place_trip_categories_cities.pick_hidden_gem:id,place_categories_id,place_categories_categories_cities_id,hidden_gem_id', 'place_trip_categories_cities.pick_hidden_gem.hidden_gems:id,image_desktop,image_mobile', 'hashtag_place_trip', 'trip_include:title,icon_image,trip_cat_id', 'trip_exclude:title,icon_image,trip_cat_id'])->where('slug', '=', $trip)->where('status', 'publish')->first(['id', 'title', 'slug', 'thumbnail', 'description', 'itinerary', 'price', 'day', 'night', 'seat', 'link_g_drive', 'date_from', 'date_to']);

        //// ambil trip lainnya
        $otherTrips = Trip_categories::with(['place_trip_categories:id,trip_categories_id,place_categories_id', 'place_trip_categories.place_categories:id,title,slug'])->where('slug', '!=', $trip)->get(['id', 'title', 'slug', 'price', 'day', 'night', 'date_from', 'date_to', 'thumbnail', 'seat']);
        return view('web.detailtrip.index', compact('detailTrip', 'otherTrips', 'id', 'trip'));
    }

    public function addToCart(Request $request)
    {
        if (!Auth::user()) {
            return redirect(route('signin.index'));
        }
        $user = Auth::user();
        if ($user->alamat == '' || $user->phone == '') {
            return redirect(route('home.profile'));
        }
        $trip = Trip_categories::where('id', '=', $request->id)->first();
        // proses insert

        DB::beginTransaction();
        try {
            $post = Cart::create([
                'user_id'               => $user->id,
                'trip_categories_id'    => $trip->id,
                'qty'                   => 1,
                'price'                 => $trip->price,
                'price_dp'              => 0,
                'total'                 => 0,
                'tanggal_pembayaran'    => Carbon::now(),
                'status'                => 'order',
            ]);
        } catch (\throwable $th) {
            DB::rollBack();
            Alert::error('Tambah Career', 'error' . $th->getMessage());
            return redirect()->back()->withInput($request->all());
        } finally {
            DB::commit();
        }
        return redirect()->route('booking');
    }

    public function search(Request $request)
    {
        return $request;
    }

    public function faq()
    {
        return view('web.faq.index');
    }

    public function cerita()
    {
        return view('web.cerita.index');
    }

    public function hiddemGem($id, $slug)
    {
        $hiddenGem = Hidden_gem::where('slug', $slug)->first(['id', 'title', 'slug', 'description1', 'image_desktop']);

        $tripHiddenGems = Trip_cities_hidden_gem_hashtag::where('hidden_gem_id', '=', $hiddenGem->id)->get(['trip_categories_id']);
        $tripUnique = $tripHiddenGems->unique('trip_categories_id')->pluck('trip_categories_id');

        if (count($tripHiddenGems) == 0) {
            $tripHiddenGemsResult = [];
        } else if (count($tripHiddenGems) >= 1) {
            $tripHiddenGemsResult = Trip_categories::whereIn('id', $tripUnique)->get(['slug', 'title', 'thumbnail', 'price', 'day', 'night', 'seat', 'date_from', 'date_to']);
        }

        return view('web.hidden.index', compact('tripHiddenGemsResult', 'hiddenGem'));
    }

    public function searchTripByDates(Request $request)
    {
        $now    =   date("Y-m-d", strtotime($request->dateFrom));
        $to     =   date("Y-m-d", strtotime($request->dateTo));
        $seat   =   $request->seats;

        $searchByPlace = place_trip_categories_cities::where('place_categories_id', '=', $request->id)->get(['trip_categories_id'])->pluck('trip_categories_id');

        $reservations = Trip_categories::where('date_from', '>=', $now)
            ->where('date_to', '<=', $to)
            ->where('seat', '>=', $seat)
            // ->whereIn('id',$searchByPlace)
            ->get();


        $reservationsq = Trip_categories::whereIn('id', $searchByPlace)
            ->where('date_from', '>=', $now)
            ->where('date_to', '<=', $to)
            ->where('seat', '>=', $seat)
            ->get();


        return response()->json($reservationsq);
        // return response()->json($reservations);
    }

    public function profile()
    {
        $user = Auth::user();
        // return $user;
        return view('web.profile.index', compact('user'));
    }

    public function profileUpdate(Request $request)
    {
        $user = Auth::user();

        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'alamat' => 'required',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }

        DB::beginTransaction();

        try {
            $user = User::whereId($user->id);

            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'alamat' => $request->alamat,
            ]);

            Alert::success('Edit Profile', 'Berhasil');
            return redirect()->route('home.profile');
        } catch (\throwable $th) {
            DB::rollBack();
            Alert::error('Edit Slider', 'error' . $th->getMessage());
            return redirect()->back()->withInput($request->all());
        } finally {
            DB::commit();
        }
    }

    public function cart()
    {
        $user = Auth::user();
        $histories = Payment::where('user_id', '=', $user->id)->get(['id', 'invoice_id', 'status',]);
        // return $history;
        return view('web.cart.index', compact('histories'));
    }

    public function booking()
    {
        if (!Auth::user()) {
            redirect('/');
        }
        $user = Auth::user();

        $newCart = Cart::with(['trip:id,title,seat,thumbnail,date_from,date_to,price'])->where('user_id', '=', $user->id)->orderBy('created_at', 'asc')->get()->last();
        // return $newCart;

        $dates1 = $newCart->trip->date_from;
        $dates2 = Carbon::today()->toDateString();

        $date1 = new DateTime($dates1);
        $date2 = new DateTime($dates2);
        // return $date1;
        $diff = $date1->diff($date2);
        // return $diff->format('%m');
        $months = $diff->format('%m');
        $pricePerMonths = 0;
        $monthly = array();
        if ($diff->format('%m') > 3) {

            $pricePerMonths = round($newCart->trip->price / 3) ;
            // return $pricePerMonths;
            for ($i = 1; $i <= 3; $i++) {
                $arrays = [
                    $price = round($pricePerMonths),
                    $perMonth = date('d M Y', strtotime($newCart->trip->date_from . ' -' . $i * 30 . 'days'))

                ];
                array_push($monthly, $arrays);
            }
        } else {
            $pricePerMonths = round($newCart->trip->price / $diff->format('%m')) ;
            // return $pricePerMonths;
            for ($i = 1; $i <= $diff->format('%m'); $i++) {
                $arrays = [
                    $price = round($pricePerMonths),
                    $perMonth = date('d M Y', strtotime($newCart->trip->date_from . ' -' . $i * 30 . 'days'))

                ];
                array_push($monthly, $arrays);
            }
        }

        return view('web.booking.index', compact('newCart', 'months', 'pricePerMonths', 'monthly'));
    }

    public function bookingOrder(Request $request)
    {
        if (!Auth::user()) {
            redirect('/');
        }
        $user = Auth::user();

        $dp_price = (int)$request->dp_price;
        $qty = (int)$request->qty;
        $telephone = substr($user->phone, -3);
        $invoice_id =   time() . $telephone;
        $invoiceDate = Carbon::now();

        $newCart = Cart::with(['trip:id,title,seat,thumbnail,date_from,date_to,price'])->where('user_id', '=', $user->id)->orderBy('created_at', 'desc')->get()->last();

        // proses insert

        DB::beginTransaction();
        try {
            $payment = Payment::create([
                'order_id'              => $newCart->id,
                'invoice_id'            => $invoice_id,
                'user_id'               => $user->id,
                'trip_categories_id'    => $request->trip_categories_id,
                'qty'                   => $request->qty,
                'price'                 => $newCart->price,
                'price_dp'              => $request->dp_price,
                'total'                 => $dp_price * $qty,
                'tanggal_pembayaran'    => Carbon::now(),
                'status'                => 'Menunggu Pembayaran',
            ]);
        } catch (\throwable $th) {
            DB::rollBack();
            Alert::error('Booking Trip', 'error' . $th->getMessage());
            // return redirect()->back()->withInput($request->all());
            return $th->getMessage();
        } finally {
            DB::commit();
        }

        $statusPembayaran = '';
        if ($dp_price < $newCart->trip->price) {
            $statusPembayaran = 'DownPayment';
        } else {
            $statusPembayaran = 'Pembayaran Penuh';
        }

        $dataCoba = [
            'title'             =>  $user,
            'data'              =>  'tes data',
            'orderid'           =>  'ORD' . $newCart->id,
            'invoice_id'        =>  $invoice_id,
            'trip'              =>  $newCart,
            'price'             =>  'Rp.' . number_format(($dp_price * $qty), 0, ',', '.'),
            'trip_name'         =>  $newCart->trip->title,
            'trip_qty'          =>  $qty,
            'trip_price'        =>  'Rp.' . number_format($request->dp_price, 0, ',', '.'),
            'statusPembayaran'  =>  $statusPembayaran,
            'invoice_date'      => date('l,jS M Y', strtotime($invoiceDate)),
            'due_date'          => date('l,jS M Y', strtotime($invoiceDate . ' + 2 days'))
        ];

        $pdf = PDF::loadView('admin.payment.coba', compact('dataCoba'));
        // User::sendEMail($email, $pdf);
        PDF::getOptions()->set([
            'defaultFont' => 'helvetica',
            'chroot' => '/var/www/myproject/public',
        ]);
        $path = Storage::put('public/storage/uploads/' . '-' . rand() . '_' . time() . '.' . 'pdf', $pdf->output());
        $email = [
            'email'         => $dataCoba['title']['email'],
            'nama'          => $dataCoba['title']['name'],
            'telephone'     => $dataCoba['title']['phone'],
            'invoiceId'     => $invoice_id,
            'duedate'       => date('l,jS M Y', strtotime($invoiceDate . ' + 2 days')),
            'qty'           => $qty,
            'trip_name'     => $newCart->trip->title,
            'price'         =>  'Rp.' . number_format(($dp_price * $qty), 0, ',', '.'),
        ];

        Storage::put($path, $pdf->output());

        Mail::send('web.emails.order', $email, function ($message) use ($email, $pdf, $path) {
            $message->from('patrajuanda10@gmail.com');
            $message->to($email['email']);
            $message->subject('Order-' . $email['nama']);
            $message->attachData(
                $pdf->output(),
                $email['nama'] . time() . '.' . 'pdf'
            );
        });
        $id = Payment::where('invoice_id', '=', $invoice_id)->first('id');
        $ids = encrypt($id);
        return redirect()->route('payment', $ids);
    }

    public function payment($id)
    {
        $decId = decrypt($id);
        $payment = Payment::with(['trip:id,title,date_from,date_to'])->where('id', '=', $decId->id)->first(['id', 'user_id', 'invoice_id', 'qty', 'price', 'price_dp', 'total', 'trip_categories_id', 'tanggal_pembayaran', 'created_at']);

        if (Carbon::now()->greaterThan($payment->created_at->addDay('2'))) {
            $payment->update([
                'status'    => 'cancelled'

            ]);

            return "sorry you cannot review anymore.";
        }
        $dueDate    = date('d M Y g:i a', strtotime($payment->created_at . ' + 2 days'));
        return view('web.payment.index', compact('payment', 'dueDate', 'id'));
    }

    public function upload($id)
    {
        return view('web.upload.index', compact('id'));
    }

    public function uploadImage(Request $request)
    {
        // $this->validate($request, [
        //     'file' => 'required',
        // ]);

        $validator = Validator::make(
            $request->all(),
            [
                'upload' => 'required',
                'id'    => 'required'
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }



        // return $request;
        // return $request->upload->extension();
        $fileName = null;
        if ($request->hasFile('upload')) {
            $photoFile = $request->file('upload');
            $fileName = $photoFile->getClientOriginalName();
            Storage::putFileAs('./public/images/bukti', $photoFile, $fileName);
            $image_path = $request->file('upload')->store('image/bukti', 'public');
        }
        // return $image_path;
        // return $fileName;

        $decId = decrypt($request->id);
        DB::beginTransaction();

        try {
            $payment = Payment::whereId($decId->id);

            $payment->update([
                'tanggal_foto_diunggah' => Carbon::now(),
                'foto_diunggah'         => $image_path,
                'status'                => 'Menunggu Pembayaran'
            ]);

            Alert::success('Edit Profile', 'Berhasil');
            // return 'tes';
            return redirect()->to('/');
        } catch (\throwable $th) {
            DB::rollBack();
            Alert::error('Edit Slider', 'error' . $th->getMessage());
            return $th->getMessage();
            return redirect()->back()->withInput($request->all());
        } finally {
            DB::commit();
        }
    }

    public function kontak()
    {
        return view('web.kontakKami.index');
    }
}
