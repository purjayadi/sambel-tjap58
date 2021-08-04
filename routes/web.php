<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;
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

Route::resource('/', PageController::class);

Route::get('produk', [PageController::class, 'product'])->name('page.product');
Route::get('tentang-kami', [PageController::class, 'about'])->name("page.about");
Route::get('kontak', [PageController::class, 'contact'])->name("page.contact");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
