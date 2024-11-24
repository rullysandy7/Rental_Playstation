<?php

use App\Http\Controllers\AdminLoginController;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes(['login' => false, 'register' => false, 'verify' => true]);

route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');
});

Route::middleware(['admin'])->group(function () {
    Route::get('/dashboard', [AdminLoginController::class, 'login'])->name('admin.dashboard');
    // Tambahkan route admin lainnya di sini
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/coba', [App\Http\Controllers\HomeController::class, 'coba'])->name('coba');
Route::get('/produk', [App\Http\Controllers\HomeController::class, 'produk'])->name('produk');
