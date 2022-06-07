<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StructController extends Controller
{
    public function showstruct(){
        $item = DB::table('cart')->get();
        return view('struct',['item' => $item]);
    }
    public function save(Request $request,$totalprice){
        $request->validate([
            'address' => 'required',
            'post' => 'required'
        ]);
        DB::table('invoice')->insert([
            'address' => $request->address,
            'postcode' => $request->post,
            'totalprice' => $totalprice
        ]);
        return redirect('/homecontroluser');
    }
}
