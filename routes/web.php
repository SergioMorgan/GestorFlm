<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\OsticketController;
use App\Http\Controllers\ActionController;

Route::get('/', HomeController::class);

Route::controller(SiteController::class)->group(function(){
    Route::get('sites', 'index')->name('sites.index');
    Route::get('sites/create',  'create')->name('sites.create');
    Route::get('sites/{id}','show')->name('sites.show');
});

Route::controller(OsticketController::class)->group(function(){
    Route::get('ostickets', 'index')->name('ostickets.index');
    Route::get('ostickets/create',  'create')->name('ostickets.create');
    Route::get('ostickets/{id}','show')->name('ostickets.show');
});

Route::controller(ActionController::class)->group(function(){
    Route::get('actions', 'index')->name('actions.index');
    Route::get('actions/create',  'create')->name('actions.create');
    Route::get('actions/{id}','show')->name('actions.show');
});

