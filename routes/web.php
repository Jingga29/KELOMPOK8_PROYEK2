<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// routes/web.php

use App\Http\Controllers\PanenController;

Route::resource('panen', PanenController::class);

// Rute untuk menampilkan formulir tambah data
Route::get('panen/create', [PanenController::class, 'create'])->name('panen.create');

// Rute untuk menampilkan formulir edit data
Route::get('panen/{panen}/edit', [PanenController::class, 'edit'])->name('panen.edit');

// routes/web.php

use App\Http\Controllers\PembelianController;

// Rute untuk laporan pembelian
Route::get('pembelian', [PembelianController::class, 'index'])->name('pembelian.index');
Route::get('pembelian/create', [PembelianController::class, 'create'])->name('pembelian.create');
Route::post('pembelian', [PembelianController::class, 'store'])->name('pembelian.store');
Route::get('pembelian/{pembelian}/edit', [PembelianController::class, 'edit'])->name('pembelian.edit');
Route::put('pembelian/{pembelian}', [PembelianController::class, 'update'])->name('pembelian.update');
Route::delete('pembelian/{pembelian}', [PembelianController::class, 'destroy'])->name('pembelian.destroy');

use App\Http\Controllers\PenjualanController;

// Routes for Laporan Penjualan
Route::prefix('laporan-penjualan')->group(function () {
    Route::get('/', [PenjualanController::class, 'index'])->name('penjualan.index');
    Route::get('/create', [PenjualanController::class, 'create'])->name('penjualan.create');
    Route::post('/store', [PenjualanController::class, 'store'])->name('penjualan.store');
    Route::get('/edit/{penjualan}', [PenjualanController::class, 'edit'])->name('penjualan.edit');
    Route::put('/update/{penjualan}', [PenjualanController::class, 'update'])->name('penjualan.update');
    Route::delete('/destroy/{penjualan}', [PenjualanController::class, 'destroy'])->name('penjualan.destroy');
});

use App\Http\Controllers\BopController;

// Routes for BOP
Route::get('/bop', [BopController::class, 'index'])->name('bop.index');
Route::get('/bop/create', [BopController::class, 'create'])->name('bop.create');
Route::post('/bop', [BopController::class, 'store'])->name('bop.store');
Route::get('/bop/{bop}/edit', [BopController::class, 'edit'])->name('bop.edit');
Route::put('/bop/{bop}', [BopController::class, 'update'])->name('bop.update');
Route::delete('/bop/{bop}', [BopController::class, 'destroy'])->name('bop.destroy');

use App\Http\Controllers\LabaRugiController;
use App\Http\Controllers\ProductController;

// Define routes for Laba
Route::get('/laba', [LabaRugiController::class, 'index'])->name('laba.index');
Route::get('/laba/create', [LabaRugiController::class, 'create'])->name('laba.create');
Route::post('/laba', [LabaRugiController::class, 'store'])->name('laba.store');
Route::get('/laba/{laba}/edit', [LabaRugiController::class, 'edit'])->name('laba.edit');
Route::put('/laba/{laba}', [LabaRugiController::class, 'update'])->name('laba.update');
Route::delete('/laba/{laba}', [LabaRugiController::class, 'destroy'])->name('laba.destroy');

// routes/web.php

use App\Http\Controllers\RugiBulananController;

// Route for displaying the index page
Route::get('/rugi_bulanan', [RugiBulananController::class, 'index'])->name('rugi_bulanan.index');

// Route for displaying the create form
Route::get('/rugi_bulanan/create', [RugiBulananController::class, 'create'])->name('rugi_bulanan.create');

// Route for storing the data from the create form
Route::post('/rugi_bulanan', [RugiBulananController::class, 'store'])->name('rugi_bulanan.store');

// Route for displaying the edit form
Route::get('/rugi_bulanan/{rugi_bulanan}/edit', [RugiBulananController::class, 'edit'])->name('rugi_bulanan.edit');

// Route for updating the data from the edit form
Route::put('/rugi_bulanan/{rugi_bulanan}', [RugiBulananController::class, 'update'])->name('rugi_bulanan.update');

// Route for deleting a record
Route::delete('/rugi_bulanan/{rugi_bulanan}', [RugiBulananController::class, 'destroy'])->name('rugi_bulanan.destroy');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/about', function () {
    return view('about');
})->name('about');

// routes/web.php

Route::get('/user', 'ProductController@index');
Route::get('/products/{id}', 'ProductController@show');
Route::get('/form', 'ProductController@form')->name('form');

Route::get('/user', [ProductController::class, "user"]);

use App\Http\Controllers\ContactFormController;

// ...

Route::get('/contact', [ContactFormController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactFormController::class, 'submitForm'])->name('contact.submit');
