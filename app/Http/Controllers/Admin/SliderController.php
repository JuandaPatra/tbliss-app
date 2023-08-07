<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Alert;
use App\Models\logPayments;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notifications = logPayments::where('status','=', 'belum dibaca')->get();
        $notificationsCount = logPayments::where('status','=', 'belum dibaca')->count();
        $datas = Slider::all();
        return view('admin.sliders.index', compact('datas', 'notifications', 'notificationsCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $notifications = logPayments::where('status','=', 'belum dibaca')->get();
        $notificationsCount = logPayments::where('status','=', 'belum dibaca')->count();
        return view('admin.sliders.create', [
            'statuses' => $this->statuses(),
            'orders' => $this->orders(),
            'notifications'=> $notifications,
            'notificationsCount' => $notificationsCount 
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required|string|max:100',
                'image_desktop' => 'required',
                'image_mobile' => 'required',
                's_order' => 'required|unique:sliders,s_order',
                'description' => 'required',
                'description2' => 'required',
                'status' => 'required'
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        // proses insert

        DB::beginTransaction();
        try {
            $post = Slider::create([
                'title' => $request->title,
                'image_desktop' => $request->image_desktop,
                'image_mobile' => $request->image_mobile,
                's_order' => $request->s_order,
                'description' => $request->description,
                'description2' => $request->description2,
                'status' => $request->status,
                'link' => $request->link
            ]);

            Alert::success('Tambah Career', 'Berhasil');
            return redirect()->route('slider.index');
        } catch (\throwable $th) {
            DB::rollBack();
            Alert::error('Tambah Career', 'error' . $th->getMessage());
            return redirect()->back()->withInput($request->all());
        } finally {
            DB::commit();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notifications = logPayments::where('status','=', 'belum dibaca')->get();
        $notificationsCount = logPayments::where('status','=', 'belum dibaca')->count();
        $slider = Slider::where('id', '=', $id)->get();
        // return $slider;
        return view('admin.sliders.edit', [
            'slider' => $slider[0],
            'orders' => $this->orders(),
            'statuses' => $this->statuses(),
            'notifications'=> $notifications,
            'notificationsCount' => $notificationsCount 
        ]);

        // return $slider;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required|string|max:100',
                'image_desktop' => 'required',
                'image_mobile' => 'required',
                // 's_order' => 'required|unique:sliders,s_order',
                'status' => 'required'
            ]
        );
        if ($validator->fails()){
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        DB::beginTransaction();

        try {
            $post = Slider::where('id', '=', $id);

            $post->update([
                'title' => $request->title,
                'image_desktop' => $request->image_desktop,
                'image_mobile' => $request->image_mobile,
                's_order' => $request->s_order,
                'status' => $request->status,
                'description' => $request->description,
                'description2' => $request->description2,
                'status' => $request->status,
                'link' => $request->link
            ]);

            Alert::success('Edit Slider', 'Berhasil');
            return redirect()->route('slider.index');
        } catch (\throwable $th) {
            DB::rollBack();
            Alert::error('Edit Slider', 'error' . $th->getMessage());
            return redirect()->back()->withInput($request->all());
        } finally {
            DB::commit();
        }

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        try {
            $slider->delete();
            Alert::success('Delete Slider', 'Berhasil');
        } catch (\throwable $th){
            Alert::error('Delete Slider', 'error'.$th->getMessage()); 
        }
        return redirect()->back();
    }

    private function statuses()
    {

        return [
            'draft' => 'draft',
            'publish' => 'publish',
        ];
    }

    private function orders()
    {
        return [
            1 => 1,
            2 => 2,
            3 => 3,
            4 => 4
        ];
    }
}
