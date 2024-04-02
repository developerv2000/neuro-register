<?php

use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthenticatedSessionController::class)->group(function () {
    Route::get('login', 'create')->middleware('guest')->name('login');
    Route::post('login', 'store')->middleware('guest');
    Route::post('logout', 'destroy')->middleware('auth')->name('logout');
});

Route::middleware('auth')->controller(PatientController::class)->name('patients.')->group(function () {
    Route::get('/', 'index')->name('index'); // home page
    Route::get('patients/create', 'create')->middleware('admin')->name('create');
    Route::get('patients/{item}', 'show')->name('show');
    Route::get('patients/edit/{item}', 'edit')->middleware('admin')->name('edit');

    Route::post('patients/store', 'store')->middleware('admin')->name('store');
    Route::patch('patients/{item}', 'update')->middleware('admin')->name('update');
    Route::delete('patients/destroy', 'destroy')->middleware('admin')->name('destroy');
});
