<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('Questions/Index', [
        'question' => [
            ['id' => 1, 'title' => 'Question 1'],
            ['id' => 2, 'title' => 'Question 2']
            ]
        ]);
})->name('questions.index');


Route::get('/question/{id}', function ($id){
    return inertia('Questions/Show' , [
        'question' => ['id' => $id, 'title' => 'Question' . $id]
    ]);
})->name('questions.show');
 