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

Route::prefix('backend')->group(function () {
    Route::get('/', 'DashboardController@index');
    Route::prefix('sample')->group(function () {
        Route::get('/', 'SampleController@index')->name('be.sample');
        Route::get('/create', 'SampleController@create')->name('be.sample.create');
        Route::post('/', 'SampleController@store')->name('be.sample.store');
        Route::get('/{id}', 'SampleController@edit')->name('be.sample.edit');
        Route::put('/{id}', 'SampleController@update')->name('be.sample.update');
        Route::delete('/{id}', 'SampleController@destroy')->name('be.sample.delete');
    });

    Route::prefix('sample2')->group(function () {
        Route::get('/', 'Sample2Controller@index')->name('be.sample2');
        Route::get('/create', 'Sample2Controller@create')->name('be.sample2.create');
        Route::post('/', 'Sample2Controller@store')->name('be.sample2.store');
        Route::get('/{id}', 'Sample2Controller@edit')->name('be.sample2.edit');
        Route::put('/{id}', 'Sample2Controller@update')->name('be.sample2.update');
        Route::delete('/{id}', 'Sample2Controller@destroy')->name('be.sample2.delete');
    });

    Route::prefix('marketplace')->group(function () {
        Route::get('/', 'MarketClientController@index')->name('be.marketplace');
        Route::get('/create', 'SampleController@create')->name('be.sample.create');
        Route::post('/', 'SampleController@store')->name('be.sample.store');
        Route::get('/{id}', 'SampleController@edit')->name('be.sample.edit');
        Route::put('/{id}', 'SampleController@update')->name('be.sample.update');
        Route::delete('/{id}', 'SampleController@destroy')->name('be.sample.delete');
    });
});

// Route::resource('sample', 'SampleController');

Route::get('/login', function () {
    return view('basesys::login');
})->name('be.login');
