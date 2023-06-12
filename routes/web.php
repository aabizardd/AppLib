<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\BukuController;


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

Route::get('/', [BukuController::class, 'dashboard']);  
Route::get('/create', [BukuController::class, 'create']);
Route::post('/store',[BukuController::class, 'store'] );
//Route::get('/dashboard', 'BukuController@index')->name('dashboard');

Route::get('/', function () {
    return view('auth/login');
});
Route::get('/logout', function () {
    return view('auth/login');
});
// Route::get('/detailbuku', function () {
//     return view('detailbuku');
// });
Route::get('/petugas', function () {
    return view('petugas');
});

// Route::get('/dashboard', function () {
//     return view('detailbuku');
// })

// Route::get('/buku', [BukuController::class, 'index'])->middleware(['auth', 'verified'])->name('buku');

Route::prefix('buku')->group(function () {
    Route::get('/', [BukuController::class, 'index'])->name('buku');
    Route::get('delete/{id}', [BukuController::class, 'delete'])->name('buku.delete');
    Route::get('tambah_buku', [BukuController::class, 'create'])->name('buku.tambah_buku');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
// Route::controller(RoleController::class)->group(function(){
//     Route::get('/roles', 'index');
// });
Route::resource('roles', RoleController::class);