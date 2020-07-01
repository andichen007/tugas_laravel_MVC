<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function form()
    {
    	return view('form');
    }

   /* public function sapa()
    {
    	return view('welcomeok');
    }
*/
    public function sapa_post(Request $request)
    {
    	// dd($request->all());
  	$nama = 'Selamat datang  '.$request["nama1"].' '.$request['nama2'];
    	return "$nama"; 


    }
   
}
