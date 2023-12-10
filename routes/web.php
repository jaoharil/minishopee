<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JenisProdukController;
use App\Http\Controllers\PagenotController;
use App\Http\Controllers\KartuController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\BerandaController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShopController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [BerandaController::class, 'index']);
Route::get('/shop', [ShopController::class, 'index']);
Route::get('/cart', [ShopController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ShopController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ShopController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [ShopController::class, 'remove'])->name('remove.from.cart');


Route::group(['middleware' => ['auth', 'peran:admin-manager-staff']], function(){
Route::prefix('admin')->group(function(){
// ruting memanggil class sontroller
// ruoting dahsboar

Route::get('/dashboard', [DashboardController::class, 'index']);

//contoh pemanggilan secara satu persatu function menggunakan get,put, update, delete
Route::get('/notfound', [PagenotController::class, 'index']);


//memanggil seluruh fungsi atau function menggunakan resource
Route::resource('kartu', KartuController::class);

//routing jenis produk
// Route::resource('jenisproduk', JenisProdukController::class);
//memanggil fungsi satu persatu
Route::get('/jenis_produk', [JenisProdukController::class, 'index']);
Route::get('/jenis_produk/create', [JenisProdukController::class, 'create']);
Route::post('/jenis_produk/store', [JenisProdukController::class, 'store']);
Route::get('/jenis_produk/edit/{id}', [JenisProdukController::class, 'edit']);
Route::post('/jenis_produk/update/{id}', [JenisProdukController::class, 'update']);
Route::get('/jenis_produk/delete/{id}', [JenisProdukController::class, 'destroy']);
//ruting produk
Route::resource('produk', ProdukController::class);
Route::post('/produk/store', [ProdukController::class, 'store']);
Route::get('/produk/show/{id}', [ProdukController::class, 'show']);
Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);
Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
Route::post('/produk/update/{id}', [ProdukController::class, 'update']);
Route::get('/generatePDF', [ProdukController::class, 'generatePDF']);
Route::get('/produk/produkPDF', [ProdukController::class, 'produkPDF']);
Route::get('/produk/pdfshow/{id}', [ProdukController::class, 'produkPDF_show']);
Route::get('/produk/export/', [ProdukController::class, 'exportProduk']);
Route::post('/produk/import/', [ProdukController::class, 'importProduk']);
//roouting pelanggan
Route::resource('pelanggan', PelangganController::class);
Route::get('/user', [UserController::class, 'index']);
Route::get('/profile', [UserController::class, 'show']);
Route::patch('/profile/{id}', [UserController::class, 'update']);

});
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
