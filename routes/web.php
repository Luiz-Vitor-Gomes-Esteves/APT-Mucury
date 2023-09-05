<?php

use App\Http\Controllers\BusController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\McardController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//User
    Route::get('/login',[UserController::class, 'indexLogin']);
    Route::post('/login',[UserController::class, 'login'])->name('User.login');

    Route::get('/register',[UserController::class, 'indexRegister']);
    Route::post('/register',[UserController::class, 'register'])->name('User.register');

    Route::get('/user/config',[UserController::class, 'index'])->name('User.index');
    Route::post('user/update',[UserController::class, 'update'])->name('User.update');
    Route::post('user/delete',[UserController::class, 'delete'])->name('User.delete');

//Home
    Route::get('/', [HomeController::class, 'showAllGraphics'])->name('Home.show');

//Bus
    Route::get('/buses',[BusController::class, 'index'])->name('Buses.index');
    Route::post('/buses',[BusController::class, 'register'])->name('Buses.register');
//Route
    Route::get('/routes',[RouteController::class, 'index'])->name('Routes.index');
    Route::post('/routes',[RouteController::class, 'register'])->name('Routes.register');

//MCard
    Route::get('/MucuryCard',[McardController::class, 'index'])->name('Mcard.index');
    Route::post('/MucuryCard',[McardController::class, 'register'])->name('Mcard.register');
//Event
    Route::get('/Event',[EventController::class, 'index'])->name('Event.index');
    Route::post('/Event',[EventController::class, 'registerCausality'])->name('Event.registerCausality');
    Route::post('/Event/register-event',[EventController::class, 'registerEvent'])->name('Event.registerEvent');
//Config
    Route::get('/Config',[ConfigController::class, 'index'])->name('Config.index');
    Route::post('/Config',[ConfigController::class, 'register'])->name('Config.register');
    Route::post('/Config/up',[UserController::class, 'update'])->name('User.update');

//Support
    Route::get('/Support',[SupportController::class, 'index'])->name('Support.index');
