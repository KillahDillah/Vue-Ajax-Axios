<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('skills', function () {      //laravel based, get all the skills categories
    return ['Laravel', 'Vue', 'PHP', 'Javascript', 'Tooling'];      //laravel imports and array in as JSON from this route
});
