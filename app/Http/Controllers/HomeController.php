<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function showitemAdmin(){
        $item = DB::table('barang')->get();
        $name = Cache::get('name','anonymus');
        return view('homeadmin',['item' => $item], compact('name'));
    }

    public function showitemUser(){
        $item = DB::table('barang')->get();
        $name = Cache::get('name','anonymus');
        return view('homeuser',['item' => $item], compact('name'));
    }
}
