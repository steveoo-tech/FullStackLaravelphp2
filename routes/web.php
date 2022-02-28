<?php
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VendorController;


Route::get('/', 'HomeController@index');


Route::get('/vendor', 'VendorController@index');