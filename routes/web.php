<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesananController;
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

// Route::get('/orders', [PesananController::class, 'GetAllOrders']);
// Route::get('/orders/{idUser}',[PesananController::class, 'GetAllOrdersbyUserID']);

// Route::post('/order',[PesananController::class, 'create']);
// Route::post('/order',[PesananController::class, 'create']);
// Route::delete('/order/{idPesanan}',[PesananController::class, 'remove']);
// Route::post('/order/update/{idPesanan}', [PesananController::class, 'update']);

Route::get('/', function () {
    return view('home');
});

Route::get('/home-registered', function () {
    return view('home-registered');
});

Route::get('/home-editor', function () {
    return view('home-editor');
});

Route::get('/home-admin', function () {
    return view('home-admin');
});

Route::get('/home-login', function () {
    return view('home-login');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/login-admin', function () {
    return view('login-admin');
});

Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});

Route::get('/sertifikasi', function () {
    return view('sertifikasi');
});

Route::get('/pencarian', function () {
    return view('pencarian');
});

Route::get('/upload-ktp', function () {
    return view('upload-ktp');
});

Route::get('/upload-sertifikasi', function () {
    return view('upload-sertifikasi');
});

Route::get('/profil-editor', function () {
    return view('profil-editor');
});

Route::get('/profil-editor-edit', function () {
    return view('profil-editor-edit');
});

Route::get('/profil-pengguna', function () {
    return view('profil-pengguna');
});

Route::get('/diskusi', function () {
    return view('diskusi');
});

Route::get('/upload', function () {
    return view('upload');
});

Route::get('/pembayaran', function () {
    return view('pembayaran');
});

Route::get('/detail-pesanan', function () {
    return view('detail-pesanan');
});

Route::get('/detail-video', function () {
    return view('detail-video');
});

Route::get('/detail-video-user', function () {
    return view('detail-video-user');
});

Route::get('/detail-video-user2', function () {
    return view('detail-video-user2');
});

Route::get('/video', function () {
    return view('video');
});

Route::get('/video2', function () {
    return view('video2');
});

Route::get('/form-revisi', function () {
    return view('form-revisi');
});

Route::get('/request-revisi', function () {
    return view('request-revisi');
});

Route::get('/request-revisi-d', function () {
    return view('request-revisi-d');
});

Route::get('/rating', function () {
    return view('rating');
});

Route::get('/detail-saldo', function () {
    return view('detail-saldo');
});

Route::get('/detail-saldo-2', function () {
    return view('detail-saldo-2');
});

Route::get('/detail-saldo-3', function () {
    return view('detail-saldo-3');
});

Route::get('/detail-saldo-4', function () {
    return view('detail-saldo-4');
});

Route::get('/detail-saldo-5', function () {
    return view('detail-saldo-5');
});

Route::get('/detail-saldo-6', function () {
    return view('detail-saldo-6');
});

Route::get('/notifikasi', function () {
    return view('notifikasi');
});

Route::get('/detail-rating', function () {
    return view('detail-rating');
});

Route::get('/snk', function () {
    return view('snk');
});

Route::get('/cara-penggunaan-pengguna', function () {
    return view('cara-penggunaan-pengguna');
});

Route::get('/cara-penggunaan-editor', function () {
    return view('cara-penggunaan-editor');
});

Route::get('/approval', function () {
    return view('approval');
});

Route::get('/daftar-pengguna', function () {
    return view('daftar-pengguna');
});

Route::get('/data-pengguna', function () {
    return view('data-pengguna');
});

Route::get('/daftar-editor', function () {
    return view('daftar-editor');
});

Route::get('/daftar-keuangan', function () {
    return view('daftar-keuangan');
});