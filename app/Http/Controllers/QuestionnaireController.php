<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Questionnaire;
use App\Models\QuestionnairQuestion;
use App\Service\QuestionnaireService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    //
    public function index(){
        $questionnaires = Questionnaire::where('expiry_date', '>', Carbon::now())->get();
        return view('questionnaire.index',['questionnaires' => $questionnaires]);
    }
    public function store(Request $request){
        $questionnair = app(QuestionnaireService::class)->generateQuestionair($request);
        return back();
    }
    public function view(Questionnaire $questionnaire){
        $questionnaire = $questionnaire->load('questions.options');
        return view('questionnaire.view', ['questionnaire' => $questionnaire]);
    }
    public function sendQuestion(Questionnaire $questionnaire){
        $questionnair = app(QuestionnaireService::class)->sendQuestionair($questionnaire);
        return back();
    }
    public function exam(Questionnaire $questionnaire){
        $questionnaire = $questionnaire->load('questions.options');
        return view('questionnaire.exam', ['questionnaire' => $questionnaire]);
    }
    public function submitExam(Request $request){
        $answer = app(QuestionnaireService::class)->submitAnswer($request);
        return redirect('/');
    }
}
