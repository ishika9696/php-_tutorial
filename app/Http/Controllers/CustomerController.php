<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class CustomerController extends Controller
{
    public function index(){
        return view('customer');
    }

    public function store(Request $request){
         print_r($request->all());
        $customer = new customer;
        $customer->name=$request['name'];
        $customer->email=$request['email'];
        $customer->address=$request['address'];
        $customer->gender=$request['gender'];
        $customer->dob=$request['dob'];
        $customer->save();
        
   
      }
     
     }

