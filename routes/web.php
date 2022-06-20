<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\OsticketController;
use App\Http\Controllers\ActionController;

Route::get('/', HomeController::class)->name('index');

// Route::controller(SiteController::class)->group(function(){
//     Route::get      ('sites',             'index')    ->name('sites.index');
//     Route::get      ('sites/create',      'create')   ->name('sites.create');
//     Route::post     ('sites',             'store')    ->name('sites.store');
//     Route::get      ('sites/{site}',      'show')     ->name('sites.show');
//     Route::get      ('sites/{site}/edit', 'edit')     ->name('sites.edit');
//     Route::put      ('sites/{site}',      'update')   ->name('sites.update');
//     Route::delete   ('sites/{site}',      'destroy')  ->name('sites.destroy');
// });

// esta ruta de tipo resource va a reemplazar a todas las 7 definiciones anteriores
// siempre y cuando  hayamos seguido la convencion de nombres singular/plural
Route::resource('sites', SiteController::class);

Route::controller(OsticketController::class)->group(function(){
    Route::get ('ostickets',                 'index')    ->name('ostickets.index');
    Route::get ('ostickets/create',          'create')   ->name('ostickets.create');
    Route::post('ostickets',                 'store')    ->name('ostickets.store');
    Route::get ('ostickets/{osticket}',      'show')     ->name('ostickets.show');
    Route::get ('ostickets/{osticket}/edit', 'edit')     ->name('ostickets.edit');
    Route::put ('ostickets/{osticket}',      'update')   ->name('ostickets.update');
});

Route::controller(ActionController::class)->group(function(){
    Route::get ('actions',               'index')    ->name('actions.index');
    Route::get ('actions/create',        'create')   ->name('actions.create');
    Route::post('actions',               'store')    ->name('actions.store');
    Route::get ('actions/{action}',      'show')     ->name('actions.show');
    Route::get ('actions/{action}/edit', 'edit')     ->name('actions.edit');
    Route::put ('actions/{action}',      'update')   ->name('actions.update');
});

Route::view('aboutus', 'aboutus')->name('aboutus');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
