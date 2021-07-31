<?php

Route::view('/', 'inicio')->name('inicio');
Route::view('/instalacion', 'instalacion')->name('instalacion');
Route::view('/practicas', 'practicas')->name('practicas');
Auth::routes();