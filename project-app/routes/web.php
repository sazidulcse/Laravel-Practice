<?php

use App\Http\Controllers\Andro;
use App\Http\Controllers\DemoCon;
use App\Http\Controllers\sazid;
use App\Http\Controllers\SiteCon;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TestCon;
use Illuminate\Support\Facades\Route;
// Route::get('/',[MyController::class,'Home']);


// Route::get('/',function(){
// return 'hello world';

// Route::get('/',[SiteController::class,'Home']);
// Route::get('/about',[SiteController::class,'About']);


Route::get('/',[sazid::class,'home']);



Route::view('/info','info');



Route::get('/about',function(){

    
    
    $items = array('java boo','bangla book','English book');
    return view('about',['roll'=>$items]);

});




// Route::get('/',[Andro::class,'File']);
// Route::get('/about',[Andro::class,'Menu']);
// Route::get('/contact',[Andro::class,'Con']);
// Route::get('/test/{valu1}/{valu2}/{valu3}/',[DemoCon::class,'TestCon']);

// Route::group(['prefix'=> 'acc'], function () {
// Route::get('/profile',function(){
//  return "this is profile";
// });
// Route::get('/message',function(){
// return"this is message";
// });
// Route::get('/home',function(){
// return "this is  home";
// });


// });