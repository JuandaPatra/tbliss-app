<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'telephone',
        'google_id',
        'alamat',
        'provinsi',
        'kota',
        'kelurahan'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Cart()
    {
        return $this->hasMany(Cart::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function paymentDetails()
    {
        return $this->hasOne(PaymentDetails::class);
    }

    public static function sendEMail($email, $pdf)
    {
        $viewData['name'] = $email->name;
        $viewData['email'] = $email->email;
        $viewData['telephone'] = $email->telephone;
        

        $path = Storage::put('public/storage/uploads/'.'-'.rand().'_'.time().'.'.'pdf', $pdf->output());

        Storage::put($path, $pdf->output());

        Mail::send('web.emails.order', $email, function ($message, $email,$pdf,) {
            $message->from('patrajuanda10@gmail.com');
            $message->to($email->email);
            $message->subject('Subject');
            $message->attach(
                $pdf->output(),$path,[
                    'mime' =>   'aplication/pdf',
                    'as'    => $email->name.time().'.'.'pdf'
                ]
            );
        });
    }
}
