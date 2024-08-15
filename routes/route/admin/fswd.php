<?php

use App\Http\Controllers\FSWD\PenumpangController;
use App\Http\Controllers\FSWD\TravelController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'travel', 'as', 'travel.'], function () {
    Route::get('/', [TravelController::class, 'index'])->name('index');
    Route::get('create', [TravelController::class, 'create'])->name('create');
    Route::post('store', [TravelController::class, 'store'])->name('store');
    Route::get('edit/{travel}', [TravelController::class, 'edit'])->name('edit');
    Route::put('update/{travel}', [TravelController::class, 'update'])->name('update');
    Route::delete('destroy/{travel}', [TravelController::class, 'destroy'])->name('destroy');
});

Route::group(['prefix' => 'penumpang', 'as', 'penumpang.'], function () {
    Route::get('/', [PenumpangController::class, 'index'])->name('index');
    Route::get('create', [PenumpangController::class, 'create'])->name('create');
    Route::post('store', [PenumpangController::class, 'store'])->name('store');
    Route::get('edit/{travel}', [PenumpangController::class, 'edit'])->name('edit');
    Route::put('update/{travel}', [PenumpangController::class, 'update'])->name('update');
    Route::delete('destroy/{travel}', [PenumpangController::class, 'destroy'])->name('destroy');
});
