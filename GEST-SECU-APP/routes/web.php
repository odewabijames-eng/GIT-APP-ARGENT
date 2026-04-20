<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\pages\AgentController;
use App\Http\Controllers\pages\DashboardController;
use App\Http\Controllers\pages\PointageController;
use App\Http\Controllers\pages\PlanningController;
use App\Http\Controllers\pages\AlerteController;
use App\Http\Controllers\pages\RapportController;
use App\Http\Controllers\pages\SiteController;


   // Route::view('/', 'welcome')->name('home');

  //login and register routes
    Route::get('/login', [AuthController::class, 'showLogin'])->name('Showlogin');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'showRegister'])->name('Showregister');
    Route::post('/register', [AuthController::class, 'register'])->name('register');

  // pages simple

    Route::get('/dashboard', [DashboardController::class, 'index'])/*->middleware('auth')*/->name('dashboard');
    Route::get('/pointages', [PointageController::class, 'index'])->name('pointages');
    Route::get('/plannings', [PlanningController::class, 'index'])->name('plannings');
    Route::get('/alertes', [AlerteController::class, 'index'])->name('alertes');


 // CRUD pages
    Route::prefix('/pages')->group(function () {

        Route::resource('/agents', AgentController::class);
        Route::resource('/rapports', RapportController::class);
        Route::resource('/sites', SiteController::class);
    });
