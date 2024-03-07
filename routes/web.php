<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $greetings = 'Hello World!';
    return view('home', compact('greetings'));
})->name('home');

Route::get('/page2', function () {
    $greetings = 'Hello World!';
    return view('page2', compact('greetings'));
})->name('page2');

Route::get('/page3', function () {
    $greetings = 'Hello World!';
    return view('page3', compact('greetings'));
})->name('page3');
