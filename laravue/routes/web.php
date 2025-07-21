<?php

use Illuminate\Support\Facades\Route;
use App\Models\Question;
use App\Http\Resources\QuestionResource;
use App\Http\Controllers\QuestionController;
Route::get('/', [QuestionController::class, 'index'])->name('questions.index');
Route::get('/question/{question:slug}', [QuestionController::class, 'show'])->name('questions.show');
 