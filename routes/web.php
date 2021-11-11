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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-event', function () {

    $start = now();
    for ($i = 0; $i < 1000000000; $i++) {

    }

    dd($start, now(), now()->diff($start));

});

Route::get('/test-event2', function () {

    $start = now();
    for ($i = 0; $i < 1000000000; $i++) {

    }

    dd($start, now(), now()->diff($start));

});
