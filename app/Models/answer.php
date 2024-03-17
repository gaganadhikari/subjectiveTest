<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
    use HasFactory;

    protected $fillable = ['student_id', 'questionnaire_id','question_id','chosen_answer'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function questionnaire()
    {
        return $this->belongsTo(Questionnaire::class);
    }


}
