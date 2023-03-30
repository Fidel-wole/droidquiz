<?php

namespace App\Http\Controllers;
use App\Models\Questions;
use App\Models\Quiz_category;
use Illuminate\Http\Request;
use App\Models\Quiz_topics;
use App\Models\User;

class QuestionsController extends Controller
{
    // public function showQuiz(Questions $post){
    //     return view('/art', ['post' => $post]);
    //     }
    public function create(Request $request, $user){
            // $incomingFields = $user->validate([
            //     'subject' => 'required',
            //     'topic' => 'required',

            // ]);
            // $incomingFields['subject'] = strip_tags($incomingFields['subject']);
            // $incomingFields['topics'] = strip_tags($incomingFields['topic']);
            // $incomingFields['user_id'] = auth()->id();
            // $incomingFields['category_id']= $user->id;
            // Quiz_topics::create($incomingFields);
            $newQuiz = new Quiz_topics;
            $newQuiz->subject=$request['subject'];
            $newQuiz->topics=$request['topic'];
            $newQuiz->user_id = auth()->user()->id;
            $newQuiz->category_id=$user;
            $newQuiz->subjectId=$user;
            $newQuiz->save();
            if($newQuiz){
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
public function quizs(Quiz_category $category){
    return view('category', ['category'=>$category]);  
}
public function category(){
      return view('categories', ['category' => Quiz_category::all()]);
   }
   public function createQuiz(Quiz_category $create){
    return view('createQuiz', ['quizid' => $create->id]);
   }
}