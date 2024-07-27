<?php

use Illuminate\Support\Facades\Route;

Route::get('/posts', function(){
    return response()->json([
        'post'=> [
            'title one' => 'post one'
        ]
        ]);
});
