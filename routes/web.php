<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('Home', [
        'name' => 'Jeffrey Way',
        'frameworks' => [
            'Laravel', 'Vue', 'Inertia'
        ]
    ]);
});
