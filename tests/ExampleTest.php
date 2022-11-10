<?php

it('can test', function () {
    expect(true)->toBeTrue();
});

it('facade type groups test', function () {
    $facade = new Laymont\Shicontstand\Shicontstand;
    $facade->getTypeGroups();
    $facade->getTypeGroup('20GP');
});

it('facade size types test', function () {
    $facade = new Laymont\Shicontstand\Shicontstand;
    $facade->getSizeTypes();
    $facade->getSizeType('22G1');
});

it('facade length codes test', function () {
    $facade = new Laymont\Shicontstand\Shicontstand;
    $facade->getLengthCodes();
    $facade->getLengthCode('B');
});

it('facade size code test', function () {
    $facade = new Laymont\Shicontstand\Shicontstand;
    $facade->getSizeCodes();
    $facade->getSizeCode('D');
});

it('facade type codes test', function () {
    $facade = new Laymont\Shicontstand\Shicontstand;
    $facade->getTypeCodes();
    $facade->getTypeCode('G1');
});
