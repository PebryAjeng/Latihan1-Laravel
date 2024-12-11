<?php

use Illuminate\Support\Facades\Route;

// Signin Routes
Route::get('/signin', function () {
    return 'Signin Form';
});

Route::post('/signin', function () {
    return 'Process Signin';
});

// Signup Routes
Route::get('/signup', function () {
    return 'Signup Form';
});

Route::post('/signup', function () {
    return 'Process Signup';
});

// Home Route
Route::get('/', function () {
    return 'Home Page';
});

// Blog Routes
Route::get('/blog', function () {
    return 'Blog List';
});

Route::get('/blog/{slug}', function ($slug) {
    return "Blog Detail: $slug";
});

// Category Route
Route::get('/category/{slug}', function ($slug) {
    return "Category: $slug";
});

// Author Route
Route::get('/author/{username}', function ($username) {
    return "Author: $username";
});

// Privacy Policy Route
Route::get('/privacy-policy', function () {
    return 'Privacy Policy Page';
});
