<?php

use Illuminate\Support\Facades\Route;
use Laymont\Shicontstand\Http\Controllers\LengthCodeController;
use Laymont\Shicontstand\Http\Controllers\SizeCodeController;
use Laymont\Shicontstand\Http\Controllers\SizeTypeController;
use Laymont\Shicontstand\Http\Controllers\TypeCodeController;
use Laymont\Shicontstand\Http\Controllers\TypeGroupController;

Route::resource('type_groups', TypeGroupController::class)->only(['index', 'show']);
Route::resource('size_types', SizeTypeController::class)->only(['index', 'show']);
Route::resource('length_codes', LengthCodeController::class)->only(['index', 'show']);
Route::resource('size_codes', SizeCodeController::class)->only(['index', 'show']);
Route::resource('type_codes', TypeCodeController::class)->only(['index', 'show']);
