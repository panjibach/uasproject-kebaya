<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\LoginController as ControllersLoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RegisterController as ControllersRegisterController;
use App\Http\Controllers\SettingMenuController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\BerhasilMiddleware;
use App\Http\Middleware\gagalMiddleware;
use App\Http\Middleware\MenuMiddleware;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\KebayaController;
use Illuminate\Support\Facades\Auth;

Route::middleware(MenuMiddleware::class)->group(function () {
   
});

