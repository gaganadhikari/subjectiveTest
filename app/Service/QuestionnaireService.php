<?php

namespace App\Service;

use App\Mail\QuestionnaireInvitation;
use App\Models\answer;
use App\Models\Question;
use App\Models\Questionnaire;
use App\Models\QuestionnairQuestion;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class QuestionnaireService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    public function generateQuestionair(Request $request){
        $physicsQuestion = Question::where('subject','physics')->get()->random(5)->pluck('id');
        $chemQuestion = Question::where('subject','Chemistry')->get()->random(5)->pluck('id');
        $questions = $physicsQuestion->merge($chemQuestion);
        $questioneer = Questionnaire::create([
            'title'=>$request->get('title'),
            'expiry_date'=>$request->get('expiry_date')
        ]);
        foreach($questions as $question){
            $questioneerQuestion = QuestionnairQuestion::create([
                'question_id'=>$question,
                'questionnaire_id'=>$questioneer->id
            ]);
        }
        return $questioneer;

    }
    public function sendQuestionair(Questionnaire $questionnaire){
        $students = student::all();
        foreach ($students as $student) {
            Mail::to($student)->send(new QuestionnaireInvitation($student,$questionnaire));
        }
    }
    public function submitAnswer(Request $request){

        $studentId = $request->input('student_id');
        $questionnaireId = $request->input('questionner_id');
        $answers = $request->input('answers');

        foreach ($answers as $questionId => $chosenAnswer) {
            Answer::create([
                'student_id' => $studentId,
                'questionnaire_id'=>$questionnaireId,
                'question_id' => $questionId,
                'chosen_answer' => $chosenAnswer
            ]);
        }
    }
}
