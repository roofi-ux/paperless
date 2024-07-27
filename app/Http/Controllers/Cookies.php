<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cookies extends Controller
{
    public function index(){
        return view('cookies.index');
    }
    public function postCookies1(Request $request){
        $valiCookies = $request->validate([
            'jenis_cookies' => 'required',
            'tanggal_pack' => 'required',
            'shift' => 'required',
            'operator' => 'required',
        ]);
        if(empty($request->session()->get('Cookies'))){
            $cookies = new Cookies();
            $cookies->fill($cookies);
            $request->session()->put('Cookies', $valiCookies);
        }
    }
}
