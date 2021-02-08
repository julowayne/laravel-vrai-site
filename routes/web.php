<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('welcome');

Route::get('/contact', [\App\Http\Controllers\ContactFormController::class, 'show'])->name('contact.form');

Route::post('/contact', [\App\Http\Controllers\ContactFormController::class, 'send'])->name('contact.send');

Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'table'])->name('admin');

// Route::get('/contact', function () {
//     return view('contact');
// })->name('contact');
