<?php

namespace App\Http\Controllers;

use App\Model\Question;
use App\Model\QuestionType;
use App\Model\Test;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()
    {
        $test_question = Test::get();
        $question_test = Question::get();
        $question_type = QuestionType::get();

        $datas = DB::table('users')->join('course_users','course_users.user_id','=','users.id')->join('test_users','test_users.user_id','=','users.id')->join('user_settings','user_settings.user_id','=','users.id')->get();
        //dd($datas);

        return view('welcome', compact('test_question','question_test','question_type','datas'));
    }
}
