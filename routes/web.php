<?php

use App\Http\Controllers\login\controllerLogin AS ControllerLogin;
use Illuminate\Support\Facades\Route;

#### LOGIN ####

//GET
Route::get('/', [ControllerLogin::class, 'loginForm']);
Route::get('deslogar', [controllerLogin::class, ('deslogar')]);

//POST
Route::post('login', [controllerLogin::class, 'Logar']);


