<?php

namespace App\Model;
use App\Model\QuestionType;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = "questions";

    public function question_types()
    {
        return $this->hasMany(QuestionType::class, 'question_id', 'id');
    }

    public function tests()
    {
        return $this->belongsTo(Test::class, 'test_id', 'id');
    }
}
