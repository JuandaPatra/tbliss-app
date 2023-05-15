<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\emails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class EmailsController extends Controller
{
    public function index(Request $request)
    {
        // return $request;
        $validator = Validator::make(
            $request->all(),
            [
                'email' => 'required|email',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator)->with('fail', 'Silahkan periksa kembali form !');
        }

        DB::beginTransaction();

        try {
            emails::create([
                'email' =>$request->email
            ]);
            return redirect()->back();
        } catch (\throwable $th) {
            DB::rollBack();
            return redirect()->back()->withInput($request->all());
        } finally {
            DB::commit();
        }
    }
}
