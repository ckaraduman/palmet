<?php

use Illuminate\Support\Facades\Route;


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
    return view('index');
});
Route::get('/info', function () {
    return "Bu yazılım Cem İlker Karaduman tarafından Ocak 2022 tarihinde üretilmeye başlanmıştır.";
});
Route::get('/hesapla', function () {
    return (2+2)*3.14;
});
// Route::get('/{cem}', function ($ad) {
//     return $ad;
// });
Route::group(['namespace'=>'App\Http\Controllers\Part1'], function(){
  Route::get('deneme','TestController@deneme');
});
