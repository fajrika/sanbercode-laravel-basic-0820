<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(){
        return view('form');
    }
    public function welcome(Request $request){
        $validator = Validator::make($request->all(),[
            'fname' => 'required',
            'lname' => 'required',
            'gender' => 'required',
            'nationality' => 'required',
            'language' => 'required',
            'bio' => 'required'
        ]);
        if ($validator->fails()) {
            return back()->with('error','ada yang belum di isi woy !!')->withInput();
        }
        return view('welcome',['data' => $request->all()]);
    }
}
