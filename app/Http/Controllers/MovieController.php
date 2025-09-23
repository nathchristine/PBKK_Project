<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index() {
      // route --> /movies/
      $movies = Movie::paginate(10);

      return view('movies.index', ["movies" => $movies]);
    }

    public function show($id) {
      // route --> /movies/{id}
      $movie = Movie::findOrFail($id);

      return view('movies.show', ["movie" => $movie]);
    }

    public function create() {
      // route --> /movies/create
        return view('movies.create');
    }

    public function store() {
      // --> /movies/ (POST)
      // hanlde POST request to store a new movie record in table
    }

    public function destroy($id) {
      // --> /movies/{id} (DELETE)
      // handle delete request to delete a movie record from table
    }

    // edit() and update() for edit view and update requests
    // we won't be using these routes
}
