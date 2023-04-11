<?php

namespace App\Http\Controllers;
use App\Models\Question;
use App\Models\Quiz_category;
use Illuminate\Http\Request;
use App\Models\Quiz_topics;
use App\Models\User;

class QuestionsController extends Controller
{
     public function showQuiz(Quiz_topics $post){
        $n = 0;
        $n++;
        $posts =$post->quest()->get();
        return view('viewquestions', ['post' => $posts, 'incre' => $n]);
        }

   
    public function create(Request $request, $user){
        $request->validate([
                'subject' => 'required',
                'topic' => 'required',

            ]);
            // $incomingFields['subject'] = strip_tags($incomingFields['subject']);
            // $incomingFields['topics'] = strip_tags($incomingFields['topic']);
            // $incomingFields['user_id'] = auth()->id();
            // $incomingFields['category_id']= $user->id;
            // Quiz_topics::create($incomingFields);
            $randonNumber = random_int(100000, 999999);
            $newQuiz = new Quiz_topics;
            $newQuiz->subject=$request['subject'];
            $newQuiz->topics=$request['topic'];
            $newQuiz->user_id = auth()->user()->id;
            $newQuiz->category_id=$user;
            $newQuiz->subjectId=$randonNumber;
            $newQuiz->save();
          //  echo $newQuiz->id;
            if($newQuiz){
                return redirect('questions')
                ->with('subjectId', $newQuiz->id);

            }
    }

    public function index(){
        $question = Question::all();
        return view('questions')->with(compact('question'));
  }
    public function questions(Request $request){
             $request->validate([
                'questions' => 'required',
                'option_a'=>'required',
                'option_b'=>'required',
                'option_c'=>'required',
                'option_d'=>'required',
                'answer'=>'required',
             ]);
            $newQuiz = new Question;
            $newQuiz->questions=$request['questions'];
            $newQuiz->option_a=$request['option_a'];
            $newQuiz->option_b=$request['option_b'];
            $newQuiz->option_c=$request['option_c'];
            $newQuiz->option_d=$request['option_d'];
            $newQuiz->answer=$request['answer'];
            $newQuiz->subjectId =$request['subjectId'];
            $newQuiz->save();
         ;
       
            return response()->json(['success' => ' Sucessfully']);
         
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