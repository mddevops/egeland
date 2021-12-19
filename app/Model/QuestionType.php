<?php

namespace App\Model;
use App\Model\Question;
use Illuminate\Database\Eloquent\Model;

class QuestionType extends Model
{
    public function questions()
    {
        return $this->belongsTo(Question::class,'question_id', 'id');
    }
}
