<?php

// routes/web.php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); // Chama a view home.blade.php
});
