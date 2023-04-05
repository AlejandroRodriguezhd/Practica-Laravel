<?php

use App\Http\Controllers\CodesController;
use App\Http\Controllers\CodesWebController;
use App\Http\Controllers\ProfileController;
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

Route::get('/code-verify', [CodesController::class, 'create'])->name('code-verify');

Route::post('/code-access', [CodesController::class, 'store'])->name('code-access');

Route::get('/code-web/{user}', [CodesWebController::class, 'create'])->name('code-web')->middleware('signed');;

require __DIR__.'/auth.php';
