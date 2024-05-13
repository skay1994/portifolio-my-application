<?php

use Skay1994\MyFramework\Facades\Router;

test('example', function () {
    expect(true)->toBeTrue();
});

test('It can access route', function () {
    $result = Router::handle('/', 'get');

    expect($result)->toBe('Hello World!');
});

test('It can access route with optional parameter', function () {
    $result = Router::handle('/edit');

    expect($result)->toBe('Hello Person, whatsup!');
});

test('It can access route with parameter', function () {
    $result = Router::handle('/edit/edu');

    expect($result)->toBe('Hello edu, whatsup!');
});
