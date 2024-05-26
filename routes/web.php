<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LoginControllerr;
use App\Http\Controllers\FormController;
use App\Http\Controllers\CustomerExportController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\RegisterController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::post('/submit-form', [FormController::class, 'submitForm'])->name('submit-form');

Route::get('/CustomerReport', [CustomerExportController::class, 'CustomerDataController'])->name('customerData');
Route::get('/CustomerReportExport', [CustomerExportController::class, 'CustomerDataExport'])->name('customerExport');

Route::get('/Events', [CardController::class, 'photobooth'])->name('photobooth');
Route::get('/Portraits', [CardController::class, 'rentals'])->name('rentals');
Route::get('/Studio', [CardController::class, 'cakes'])->name('cakes');
Route::get('/Developers', [CardController::class, 'developers'])->name('developers');

Route::get('/preview', [CardController::class, 'preview'])->name('preview');
Route::get('/Registerpage', [CardController::class, 'Registerpage'])->name('Registerpage');
Route::get('/signinpage', [CardController::class, 'signinpage'])->name('signinpage');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/signin', [LoginControllerr::class, 'showLoginForm'])->name('signin');
Route::post('/signin', [LoginControllerr::class, 'signin']);

