<?php

namespace App\Http\Controllers;
use App\Models\Questions;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    // public function showQuiz(Questions $post){
    //     return view('/art', ['post' => $post]);
    //     }
    public function create(Request $request){
            $incomingFields = $request->validate([
                'subject' => 'required',
                'topic' => 'required',
                'questions' => 'required',
                'option_a' => 'required',
                'option_b' => 'required',
                'option_c' => 'required',
                'option_d'=> 'required',
                'answer' => 'required',
            ]);
            $incomingFields['subject'] = strip_tags($incomingFields['subject']);
            $incomingFields['topic'] = strip_tags($incomingFields['topic']);
            $incomingFields['questions'] = strip_tags($incomingFields['questions']);
            $incomingFields['option_a'] = strip_tags($incomingFields['option_a']);
            $incomingFields['option_b'] = strip_tags($incomingFields['option_b']);
            $incomingFields['option_c'] = strip_tags($incomingFields['option_c']);
            $incomingFields['option_d'] = strip_tags($incomingFields['option_d']);
            $incomingFields['user_id'] = auth()->id();
            Questions::create($incomingFields);
            if($incomingFields){
                return back()->with('sucess', 'Quiz sucessfully created');
            }
    }
    public function question(){
        
        $userinfo = questions::all();
        return view('/art', compact('userinfo'));
    }
    public function mark(Request $request){
        return view('/resultSummary');
    
}

}