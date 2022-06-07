<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddController extends Controller
{
    public function insert(Request $request){
        $request->validate([
            'category' => 'required|string',
            'name' => 'required|min:5|max:80|unique:barang',
            'price' => 'required|integer',
            'stock' => 'required|integer',
            'photo' => 'required'
        ]);
        $photo = $request->file('photo');
        $filename = $photo->getClientOriginalName();
        DB::table('barang')->insert([
            'category' => $request->category,
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'photo' => './product/'.$filename
        ]);
        $location = './product/';
        $photo->move($location,$filename);
        return redirect('/homecontroladmin');
    }

    public function cart($id, Request $request){
        if($request->total==NULL||$request->total==0){
            return abort(403, 'required item count to buy');
        }
        $barang = Barang::find($id);
        $temps = Cart::find($id);
        if($temps==NULL){
            DB::table('cart')->insert([
                'category' => $barang->category,
                'name' => $barang->name,
                'total' => $request->total,
                'price' => $barang->price,
                'totalprice' => $barang->price*$request->total
            ]);
            $barang->stock -= $request->total;
            $barang->save();
            return redirect('/homecontroluser');
        }else{
            if($request->total>$barang->stock){
                return abort(403, 'stock not available');
            }else{
                $barang->stock -= $request->total;
                $temps->total += $request->total;
                $temps->totalprice += $request->total*$barang->price;
                $barang->save();
                $temps->save();
                return redirect('/homecontroluser');
            }
        }
    }
}
