<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PageController;
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
// Route::get('/', function () {
//     return view('index');
// });
Route::get('/giris',[MainController::class,'giris'])->name('anamenu');
Route::get('/test',[PageController::class,'test'])->name('test');
// Route::get('/','App\Http\Controllers\MainController@giris');
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
Route::get('/gonder', function () {
    $data=["ad" => "cem", "soyad" => "karaduman"]; 
    return view('index',$data);
});
