<?php

use App\Http\Controllers\CitationController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\MascotController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\ProfessionalController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Models\Owner;
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
Route::resource('owners' ,OwnerController::class);
Route::resource('mascots' ,MascotController::class);
Route::resource('consultations' ,ConsultationController::class);
Route::resource('citations' ,CitationController::class);
Route::resource('professionals' ,ProfessionalController::class);
Route::resource('reports' ,ReportController::class);

require __DIR__.'/auth.php';
