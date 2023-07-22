<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view ('form');
    }
    public function register( Request   $request)
    {
        $request->validate(
        [
          'Email adress'=>'required',
          'Password'=>'required'
        ]
        );

   print_r($request->all());
    }
}
