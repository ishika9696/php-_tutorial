<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


 //Route::get('/demo', function(){
   //  echo "hello";
 //});
 //Route::get('/test',function(){
 //    return view ('demo');  // demo file p kyu nhija rha
 //});  
     
 //Route::get('/test/{name}/{id?}', function ($name,$id=null){
 //    $data =compact('name','id');
 //    print_r($data);      
 //});    
 //Route::get('/check/{name}/{id?}',function($name,$id=null){
   //$data = compact('name','id');
    //return view ('demo')->with($data);
 //});
 // for controllers
 //Route::get( '/test' ,[DemoController::class, 'index' ]);
// Route:: get('/demo', 'App\Http\Controllers\DemoController@index'); second technique
 // Route::get('/demo',SingleActionController::class);  
 //Route::get('/form',[RegisterController::class,'index']);
 //Route::post('/form',[RegisterController::class,'register']);
 // for models
 //Route::get('/customer',function(){
 //$customer=customer::all();
 //print_r($customer->toArray());
 //});
 //for insert query
 //Route::get('/register',[RegisterController::class,'index']);
 //Route:post('/register',[RegisterController::class,'register']);
 Route::get('/customer',[CustomerController::class,'index']);
 Route::post('/customer',[CustomerController::class,'store']); 
 