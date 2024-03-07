<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $greetings = 'Hello World!';
    return view('home', compact('greetings'));
});

Route::get('/page2', function () {
    $greetings = 'Hello World!';
    return view('page2', compact('greetings'));
});

Route::get('/page3', function () {
    $greetings = 'Hello World!';
    return view('page3', compact('greetings'));
});
