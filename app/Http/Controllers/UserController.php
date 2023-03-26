<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile(User $profile){
        return view ('/profile', ['quizCount' => $profile->profile()->count()]);
    }
    public function analysis(){
        return view('/analytics');
    }
}
