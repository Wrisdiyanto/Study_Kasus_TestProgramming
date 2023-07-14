<?php

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

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
    $client = new Client();
    $res = $client->request('GET','https://dummyjson.com/products');
    $statusCode = $res->getStatusCode();
    $isi  = $res->getBody()->getContents();
    $data = json_decode($isi, true);  
    $title = "Show Produk"; 
    return view('welcome', compact('data','title'));
})->name('home');

Route::get('/detailproduk/{id}', [App\Http\Controllers\ProdukController::class, 'index'])->name('detailbarang'); 
Route::get('/formpembelian/{id}', [App\Http\Controllers\ProdukController::class, 'belibarang'])->name('formpembelian'); 
Route::get('/cetakdatabarang/', [App\Http\Controllers\ProdukController::class, 'cetakbarang'])->name('cetakbarang'); 
Route::post('/checkout', [App\Http\Controllers\ProdukController::class, 'checkout'])->name('checkout'); 
