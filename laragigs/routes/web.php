<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function() {
    return response('<h1>Hello World!</h1>', 200);
});

Route::get('/hello/{id}', function($id) {
    return response('Post '. $id);
}) ->where('id', '[0-9]+');

Route::get('/hello/search', function(Request $request) {
    return $request->name . ' '. $request->city;
});