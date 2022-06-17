<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OsticketController;

Route::get('/', HomeController::class);

Route::controller(OsticketController::class)->group(function(){
    Route::get('ostickets', 'index');
    Route::get('ostickets/create',  'create');
    Route::get('ostickets/{osticket}','show');
});