<?php

use App\Http\Controllers\Andro;
use App\Http\Controllers\SiteCon;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TestCon;
use Illuminate\Support\Facades\Route;
// Route::get('/',[MyController::class,'Home']);


// Route::get('/',function(){
// return 'hello world';

// Route::get('/',[SiteController::class,'Home']);
// Route::get('/about',[SiteController::class,'About']);
Route::get('/',[Andro::class,'File']);
Route::get('/about',[Andro::class,'Menu']);
Route::get('/contact',[Andro::class,'Con']);
