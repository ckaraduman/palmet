<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
        function f1()
        {
        // echo "MainController f1 fonksiyonu çalıştı!";// return view('index');
        // $data=["ad" => "cem ilker", "soyad" => "karaduman"];
        // return view('page',$data);
        return view('page');
        }
        public function kisiekle(Request $data)
        {
          $name = $data->input('name');
          echo $name;
          echo "<br>";
          $surname = $data->input('surname');
          echo $surname;
          echo "<br>";
          $phone = $data->input('phone');
          echo $phone;
        // dd($data);
        // echo "MainController f1 fonksiyonu çalıştı!";// return view('index');
        // $data=["ad" => "cem ilker", "soyad" => "karaduman"];
        // return view('page',$data);
        // echo "ok";
        }
    // function giris()
    // {
    //   echo "MainController giriş fonksiyonu çalıştı!";// return view('index');
    // }
    // function test()
    // {
    //   echo "MainController test fonksiyonu çalıştı!";// return view('index');
    // }
    function start()
    {
      echo "MainController start fonksiyonu çalıştı!";// return view('index');
          // $data=["ad" => "cem", "soyad" => "karaduman"];
          return view('index');
    }
}
