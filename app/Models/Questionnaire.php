<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'expiry_date'];

    public function questionnairQuestions()
    {
        return $this->hasMany(QuestionnairQuestion::class);
    }

    public function questions()
    {
        return $this->belongsToMany(Question::class, 'questionnair_questions', 'questionnaire_id', 'question_id');
    }


    public function responses()
    {
        return $this->hasMany(Response::class);
    }
}
