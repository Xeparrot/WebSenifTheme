<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('webseniftheme')->group(function() {
    Route::get('/', 'WebSenifThemeController@index');
});

includeRouteFiles(Module::getPath().'/WebSenifTheme/Menus');