<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = ['subject', 'question_text', 'correct_answer'];

    public function options()
    {
        return $this->hasMany(Option::class);
    }

    public function questionnairQuestions()
    {
        return $this->hasMany(QuestionnairQuestion::class);
    }
}
