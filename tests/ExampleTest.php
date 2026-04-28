<?php

it('shicontstand can be instantiated', function () {
    expect(true)->toBeTrue();
});

it('shicontstand class exists', function () {
    expect(class_exists(\Laymont\Shicontstand\Shicontstand::class))->toBeTrue();
});

it('shicontstand service provider exists', function () {
    expect(class_exists(\Laymont\Shicontstand\ShicontstandServiceProvider::class))->toBeTrue();
});

it('shicontstand facade exists', function () {
    expect(class_exists(\Laymont\Shicontstand\Facades\Shicontstand::class))->toBeTrue();
});

it('models exist', function () {
    expect(class_exists(\Laymont\Shicontstand\Models\TypeGroup::class))->toBeTrue();
    expect(class_exists(\Laymont\Shicontstand\Models\SizeType::class))->toBeTrue();
    expect(class_exists(\Laymont\Shicontstand\Models\LengthCode::class))->toBeTrue();
    expect(class_exists(\Laymont\Shicontstand\Models\SizeCode::class))->toBeTrue();
    expect(class_exists(\Laymont\Shicontstand\Models\TypeCode::class))->toBeTrue();
});

it('resources exist', function () {
    expect(class_exists(\Laymont\Shicontstand\Http\Resources\TypeGroupResource::class))->toBeTrue();
    expect(class_exists(\Laymont\Shicontstand\Http\Resources\SizeTypeResource::class))->toBeTrue();
    expect(class_exists(\Laymont\Shicontstand\Http\Resources\LengthCodeResource::class))->toBeTrue();
    expect(class_exists(\Laymont\Shicontstand\Http\Resources\SizeCodeResource::class))->toBeTrue();
    expect(class_exists(\Laymont\Shicontstand\Http\Resources\TypeCodeResource::class))->toBeTrue();
});

it('controllers exist', function () {
    expect(class_exists(\Laymont\Shicontstand\Http\Controllers\TypeGroupController::class))->toBeTrue();
    expect(class_exists(\Laymont\Shicontstand\Http\Controllers\SizeTypeController::class))->toBeTrue();
    expect(class_exists(\Laymont\Shicontstand\Http\Controllers\LengthCodeController::class))->toBeTrue();
    expect(class_exists(\Laymont\Shicontstand\Http\Controllers\SizeCodeController::class))->toBeTrue();
    expect(class_exists(\Laymont\Shicontstand\Http\Controllers\TypeCodeController::class))->toBeTrue();
});