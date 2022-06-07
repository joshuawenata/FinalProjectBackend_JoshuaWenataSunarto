<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class LoginAdminController extends Controller
{
    public function compare(Request $request){
        $rules = [
            'idadmin' => 'required',
            'password' => 'required|min:6|max:12'
        ];

        $customMessages = [
            'idadmin.required' => 'The ID Admin field is required.',
        ];

        $data = $this->validate($request, $rules, $customMessages);

        if(Auth::guard('user')->attempt($data)){
            $request->session()->regenerate();
            $name = DB::table('users')->where('idadmin',$request->idadmin)->get('name');

            Cache::flush();
            Cache::put('name',$name);
            return redirect('/homecontroladmin');
        }

        return abort(403, 'Wrong Credentials!');
    }
}
