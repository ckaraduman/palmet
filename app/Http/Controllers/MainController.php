<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function giris()
    {
      echo "MainController giriş fonksiyonu çalıştı!";// return view('index');
    }
    function test()
    {
      echo "MainController test fonksiyonu çalıştı!";// return view('index');
    }
}
