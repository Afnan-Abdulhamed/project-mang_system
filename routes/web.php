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
    // localization Router
Route::get('lang/{locale}', 'LocalizationController@index');

Auth::routes();

Route::get('/register', [
    'as' => 'register',
    'uses' => 'Auth\RegisterController@showRegistrationForm'
  ]);

Route::get('/', 'Auth\LoginController@showLoginForm');

Route::middleware('auth')->group(function () {
    Route::middleware('auth.admin:user')->group(function () {
        // Admin Side Routes ............ <3 
            Route::prefix('/projects-manager/admin')->group(function () {
        
                Route::get('/', 'HomeController@admin')->name('adminHome');
                // projects 
                Route::resource('/projects', 'ProjectsController')->only([
                    'create', 'edit', 'show', 'store', 'index'
                ]);
                // users
                Route::resource('/users', 'UsersController')->only([
                    'show', 'index'
                ]);
                Route::get('/users/{userId}/projects', 'UsersController@getUserProjects');
                });
            });                
            
    
    // Client Side Routes ............ <3 
    Route::prefix('/projects-manager')->group(function () {
        Route::get('/{any}', 'HomeController@client')->where('any', '.*');
        Route::get('/', 'HomeController@client');
    });
    

});