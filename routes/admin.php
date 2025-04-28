<?php

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SubServiceController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        // Dashboard Route
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        
        // Services Routes
        Route::resource('services', ServiceController::class);
        
        // Sub-Services Routes
        Route::resource('sub-services', SubServiceController::class);
        
        // Gallery Routes
        Route::resource('galleries', GalleryController::class);
        
        // Contact Routes
        Route::get('contacts', [ContactController::class, 'index'])->name('contacts.index');
        Route::get('contacts/{contact}', [ContactController::class, 'show'])->name('contacts.show');
        Route::delete('contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');
    });
}); 