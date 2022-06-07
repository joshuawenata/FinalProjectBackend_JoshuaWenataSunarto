<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataController extends Controller
{
    public function edit($id){
        $temp = Barang::find($id);
        return view('update', compact('temp'));
    }

    public function update($id, Request $request){
        $request->validate([
            'category' => 'required|string',
            'name' => 'required|min:5|max:80',
            'price' => 'required|integer',
            'stock' => 'required|integer',
            'photo' => 'required'
        ]);

        $photo = $request->file('photo');
        $filename = $photo->getClientOriginalName();
        $temps = Barang::find($id);
        $temps->id = $id;
        $temps->category = $request->category;
        $temps->name = $request->name;
        $temps->price = $request->price;
        $temps->stock = $request->stock;
        $temps->photo = './product/'.$filename;
        $temps->save();

        return redirect('/homecontroladmin');
    }

    public function delete($id){
        $temps = Barang::find($id);
        $temps->delete();

        return redirect('/homecontroladmin');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function logoutr(){
        Auth::logout();
        return redirect('/register');
    }

    public function logoutl(){
        Auth::logout();
        return redirect('/loginuser');
    }
}
