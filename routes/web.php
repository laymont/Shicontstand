<?php

use Illuminate\Support\Facades\Route;

Route::resource('type_groups', \Laymont\Shicontstand\Http\Controllers\TypeGroupController::class)->only(['index', 'show']);
Route::resource('size_types', \Laymont\Shicontstand\Http\Controllers\SizeTypeController::class)->only(['index', 'show']);
Route::resource('length_codes', \Laymont\Shicontstand\Http\Controllers\LengthCodeController::class)->only(['index', 'show']);
Route::resource('size_codes', \Laymont\Shicontstand\Http\Controllers\SizeCodeController::class)->only(['index', 'show']);
Route::resource('type_codes', \Laymont\Shicontstand\Http\Controllers\TypeCodeController::class)->only(['index', 'show']);
