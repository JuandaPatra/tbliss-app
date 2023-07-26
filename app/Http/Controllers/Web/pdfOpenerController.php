<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\globalData;
use Illuminate\Http\Request;
use file;

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
}
