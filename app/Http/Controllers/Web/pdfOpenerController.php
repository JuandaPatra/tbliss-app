<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\globalData;
use App\Models\Payment;
use Illuminate\Http\Request;
use file;
use Illuminate\Support\Facades\Storage;

class pdfOpenerController extends Controller
{
    public function index(){


        $pdfSyaratUrl = globalData::where('categories', '=', 2)->first();
        
        $urlParts = parse_url($pdfSyaratUrl->description);

        return response()->file(public_path($urlParts['path']),['content-type'=>'application/pdf']);
    }

    public function index2(){
        $pdfSyaratUrl = globalData::where('categories', '=', 1)->first();
        
        $urlParts = parse_url($pdfSyaratUrl->description);

        return response()->file(public_path($urlParts['path']),['content-type'=>'application/pdf']);
    }

    public function invoice($id){
        $pdfSyaratUrl = Payment::where('id', '=', $id)->first();
        $url= $pdfSyaratUrl->url_paid_invoice;
        
        return response()->file(storage_path('app/public/storage/uploads/'.$url),['content-type'=>'application/pdf']);
    }
}
