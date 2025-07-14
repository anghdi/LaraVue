<?php

use Illuminate\Support\Facades\Route;
use App\Models\Question;
use App\Http\Resources\QuestionResource;
Route::get('/', function () {
    $questions = QuestionResource::collection(
        Question::with('user')->latest()->paginate(15)
    );

    return inertia('Questions/Index', [
        // 'question' => [
        //     ['id' => 1, 'title' => 'Question 1'],
        //     ['id' => 2, 'title' => 'Question 2']
        //     ]

        'questions' => $questions

        ]);


})->name('questions.index');


Route::get('/question/{id}', function ($id){
    return inertia('Questions/Show' , [
        'question' => ['id' => $id, 'title' => 'Question' . $id]
    ]);
})->name('questions.show');
 