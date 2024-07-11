<?php

use App\Http\Controllers\CreateSchoolYearController;
use App\Http\Controllers\NiveauxController;
use App\Http\Controllers\SchoolYearController;
use App\Http\Controllers\StoreYearController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('niveaux')->group(function () {
        Route::get('/', NiveauxController::class)
            ->name('niveaux');
    });

    Route::prefix('settings')->group(function () {
        Route::get('/', SchoolYearController::class)
            ->name('settings');
    });

    Route::prefix('school-year')->group(function () {
        Route::get('/create-school-year', CreateSchoolYearController::class)
            ->name('settings.create-school-year');

        Route::post('/store-school-year', StoreYearController::class)
            ->name('settings.store-year');
    });

});
