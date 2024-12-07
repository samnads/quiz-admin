<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\QuestionController;
use App\Livewire\LanguageDropdown;

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('page', [PageController::class, 'page'])->name('page');
Route::resource('questions', QuestionController::class);













Route::get('/', function () {
    return view('welcome');
});
