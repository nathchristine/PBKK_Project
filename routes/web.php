<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/movies', function () {
    $movies = [
        ["name" => "mario", "skill" => 75, "id" => "1"],
        ["name" => "luigi", "skill" => 45, "id" => "2"],
    ];
    return view('movies.index', ["greeting" => "hi", "movies" => $movies]);
});

Route::get('/movies/create', function () {
    return view('movies.create');
});

Route::get('/movies/{id}', function ($id) {
   
    return view('movies.show', ["id" => $id]);
});