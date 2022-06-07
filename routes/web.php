<?php

use App\Http\Controllers\AddController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StructController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/loginuser', function () {
    return view('loginuser');
});

Route::get('/loginadmin', function () {
    return view('loginadmin');
})->name('login');

Route::get('/homeuser', function () {
    return view('homeuser');
});

Route::middleware('AdminAuth')->group(function () {
    Route::get('/homecontroladmin', [HomeController::class,'showitemAdmin']);
});
Route::get('/homecontroluser', [HomeController::class,'showitemUser']);

Route::get('/homeadmin', function () {
    return view('homeadmin');
});

Route::get('/logout', [DataController::class,'logout']);
Route::get('/logoutr', [DataController::class,'logoutr']);
Route::get('/logoutl', [DataController::class,'logoutl']);

Route::get('/add', function () {
    return view('add');
});

Route::get('/struct', function () {
    return view('struct');
});

Route::post('/save/{totalprice}', [StructController::class,'save']);
Route::get('/struct', [StructController::class,'showstruct']);

Route::put('/update/updates/{id}', [DataController::class,'update']);
Route::get('/update/edit/{id}', [DataController::class,'edit']);
Route::get('/delete/{id}', [DataController::class,'delete']);
Route::post('/addtoCart/{id}', [AddController::class,'cart']);

Route::post('/register/store', [RegisterController::class,'store']);
Route::post('/loginuser/compare', [LoginUserController::class,'compare']);
Route::post('/loginadmin/compare', [LoginAdminController::class,'compare']);
Route::post('/add/insertDB', [AddController::class,'insert']);

