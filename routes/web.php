<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Middleware\AdminAuhtentication as fff;
use App\Livewire\LanguageDropdown;


Route::get('page', [PageController::class, 'page'])->name('page');


Route::name('admin.')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
    Route::group(["middleware" => ["adminAuth"]], function () {      
        Route::get('/', [AuthController::class, 'home'])->name('home');
        Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
        Route::resource('questions', QuestionController::class);
    });
});