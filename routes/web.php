<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PetugasController;


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
    Route::get('detail/{id}', [BukuController::class, 'show'])->name('buku.detail');

    Route::post('store',[BukuController::class, 'store'])->name('buku.store');
    Route::post('update',[BukuController::class, 'update'])->name('buku.update');
    Route::post('update_detail',[BukuController::class, 'update_detail'])->name('buku.update_detail');
});



Route::prefix('petugas')->group(function () {
    Route::get('/', [PetugasController::class, 'index'])->name('petugas');
    Route::get('tambah', [PetugasController::class, 'create'])->name('petugas.tambah');
    Route::get('show/{id}', [PetugasController::class, 'show'])->name('petugas.detail');
    Route::post('store', [PetugasController::class, 'store'])->name('petugas.store');
    Route::post('update', [PetugasController::class, 'update'])->name('petugas.update');
    Route::get('hapus/{id}', [PetugasController::class, 'destroy'])->name('petugas.delete');
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