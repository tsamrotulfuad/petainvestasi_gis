<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BatikController;
use App\Http\Controllers\LoginController;
use App\Models\Batik;

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

// Homepage
Route::get('/', function () {
    return view('welcome');
});

//peta statis
Route::get('/petastatis', function () {
    return view('petastatis');
});

// Akses Login & Logout
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

// Akses url via slug
Route::get('/batiklist', function () {
    $batikList = Batik::all();
    return view('batikList', ['batiklist' => $batikList]);
})->name('batiklist');

Route::get('/batiklist/{batik:slug}', function (Batik $batik) {
    return view('batikShow', ['batikshow' => $batik]);
})->name('batikshow');

//middleware masuk
Route::middleware(['auth'])->group(function () {
    //Route Admin
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::resource('batik', BatikController::class);

});


