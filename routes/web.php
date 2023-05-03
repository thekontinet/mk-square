<?php

use App\Http\Controllers\Biz\CreateNewBusinessController;
use App\Http\Controllers\ProfileController;
use App\Models\Business;
use Illuminate\Support\Facades\Route;

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

    Route::get('/business', function(){
        $businesses = Auth::user()->businesses()->paginate();
        return view('business.index', compact('businesses'));
    })->name('business.index');
    Route::resource('business', CreateNewBusinessController::class)->only(['store', 'create']);
});

require __DIR__.'/auth.php';
