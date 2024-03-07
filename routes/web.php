<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $greetings = 'Hello World!';
    return view('home', compact('greetings'));
});
