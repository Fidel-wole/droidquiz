<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use App\Models\User;
use App\Models\Quiz_topics;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile(User $profile){
        return view ('/profile', ['quizCount' => $profile->profile()->count()]);
    }
    public function analysis(User $quizs){
        $quiz = $quizs->profile()->latest()->paginate(4);
        return view('/analytics', ['quizCount' => $quizs->profile()->count(),
        'quizs'=>$quiz]
    );
    }

    public function search($term){
        $search = Quiz_topics::search($term)->get();
        return($search);
    }
}
