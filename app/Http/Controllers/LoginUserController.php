<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class LoginUserController extends Controller
{
    public function compare(Request $request){
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:12'
        ]);

        if(Auth::guard('user')->attempt($data)){
            $request->session()->regenerate();
            $name = DB::table('users')->where('email',$request->email)->get('name');

            Cache::flush();
            Cache::put('name',$name);

            return redirect('/homecontroluser');
        }
        return abort(403, 'Wrong Credentials!');
    }
}
