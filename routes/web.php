<?php

use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\GalleryController as AdminGalleryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;
use App\Http\Controllers\Admin\SubServiceController;
use Illuminate\Support\Facades\Route;

// Frontend Routes
Route::get('/', [HomeController::class, 'index'])->name('frontend.home');
Route::get('/about', [HomeController::class, 'about'])->name('frontend.about');
Route::get('/services', [ServiceController::class, 'index'])->name('frontend.services');
Route::get('/services/{id}', [ServiceController::class, 'show'])->name('frontend.services.show');
Route::get('/gallery', [GalleryController::class, 'index'])->name('frontend.gallery');
Route::get('/gallery/{gallery}', [GalleryController::class, 'show'])->name('frontend.gallery.show');
Route::get('/contact', [ContactController::class, 'index'])->name('frontend.contact');
Route::post('/contact', [ContactController::class, 'store'])->name('frontend.contact.store');
Route::get('/policy', [HomeController::class, 'policy'])->name('policy');

// Admin Routes
Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    // Dashboard Route
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Contact Routes
    Route::get('/contacts', [AdminContactController::class, 'index'])->name('contacts.index');
    Route::get('/contacts/{contact}', [AdminContactController::class, 'show'])->name('contacts.show');
    Route::delete('/contacts/{contact}', [AdminContactController::class, 'destroy'])->name('contacts.destroy');
    
    // Gallery Routes
    Route::get('/galleries', [AdminGalleryController::class, 'index'])->name('galleries.index');
    Route::get('/galleries/create', [AdminGalleryController::class, 'create'])->name('galleries.create');
    Route::post('/galleries', [AdminGalleryController::class, 'store'])->name('galleries.store');
    Route::get('/galleries/{gallery}/edit', [AdminGalleryController::class, 'edit'])->name('galleries.edit');
    Route::put('/galleries/{gallery}', [AdminGalleryController::class, 'update'])->name('galleries.update');
    Route::delete('/galleries/{gallery}', [AdminGalleryController::class, 'destroy'])->name('galleries.destroy');

    // Service Routes
    Route::get('/services', [AdminServiceController::class, 'index'])->name('services.index');
    Route::get('/services/create', [AdminServiceController::class, 'create'])->name('services.create');
    Route::post('/services', [AdminServiceController::class, 'store'])->name('services.store');
    Route::get('/services/{service}/edit', [AdminServiceController::class, 'edit'])->name('services.edit');
    Route::put('/services/{service}', [AdminServiceController::class, 'update'])->name('services.update');
    Route::delete('/services/{service}', [AdminServiceController::class, 'destroy'])->name('services.destroy');

    // Sub-Service Routes
    Route::get('/sub-services', [SubServiceController::class, 'index'])->name('sub-services.index');
    Route::get('/sub-services/create', [SubServiceController::class, 'create'])->name('sub-services.create');
    Route::post('/sub-services', [SubServiceController::class, 'store'])->name('sub-services.store');
    Route::get('/sub-services/{subService}/edit', [SubServiceController::class, 'edit'])->name('sub-services.edit');
    Route::put('/sub-services/{subService}', [SubServiceController::class, 'update'])->name('sub-services.update');
    Route::delete('/sub-services/{subService}', [SubServiceController::class, 'destroy'])->name('sub-services.destroy');
});

// Auth Routes
require __DIR__.'/auth.php'; 