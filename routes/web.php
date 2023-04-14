<?php

use App\Http\Controllers\OrganisasiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PengajuanController;
use App\Models\organisasi;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// route::get('/organisasi',[OrganisasiController::class,'index'])->name('organisasi');

route::get('/logout',[ProfileController::class,'logout']);
route::get('/form',[PengajuanController::class,'form']);
route::get('/organisasi',[PengajuanController::class,'organisasi']);
Route::get('/organisasi', [OrganisasiController::class,'index'])->name('organisasi');
Route::get('/organisasi/create', [OrganisasiController::class,'create']);
Route::post('/organisasi/store', [OrganisasiController::class,'store']);
Route::delete('/organisasi/{id}', [OrganisasiController::class,'destroy']);
Route::put('/organisasi/{id}', [OrganisasiController::class,'update']);
Route::get('/organisasi/{id}/edit', [OrganisasiController::class,'edit']);
// Route::resource('/organisasi', [OrganisasiController::class]);
