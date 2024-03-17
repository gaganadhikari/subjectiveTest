<?php

use App\Http\Controllers\QuestionnaireController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/questioner',[QuestionnaireController::class,'index'])->name('questioner.index');
Route::post('/questioner',[QuestionnaireController::class,'store'])->name('questioner.store');
Route::get('/questioner/{questionnaire}',[QuestionnaireController::class,'view'])->name('questioner.view');
Route::get('/exam/{questionnaire}',[QuestionnaireController::class,'exam'])->name('exam.get');
Route::post('/exam',[QuestionnaireController::class,'submitExam'])->name('submit.answers');
Route::get('/send-exam/{questionnaire}',[QuestionnaireController::class,'sendQuestion'])->name('send.exam');

