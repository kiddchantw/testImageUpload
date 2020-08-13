<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/image', function () {
    return view('image');
});

Route::post('upload', function (Request $request) {
    // dd("router upload"); ok
    // dd($request->all()); ok
    //m2 
    $image = $request->image;
    $filename = $image->getClientOriginalName();      //保留原檔名
    $destinationPath = 'public';  //設定路徑

    // store the file
    $imagePath  = $image->storeAs("$destinationPath", $filename);
    return $imagePath;
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
