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
        return view('/analytics', ['quizCount' => $quizs->profile()->count(),
        'quiz'=>Quiz_topics::where('user_id', auth()->user()->id)->get()]
    );
    }

}
