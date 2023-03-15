<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function register(Request $request){
       
            $request->validate([
                'Fullname'=>'required',
                'email'=>'required|email|unique:users',
                'Username'=>'required',
                'Password'=>'required|min:5|max:12'
            ]);
            $user = User::create([
                'Fullname'=>$request->Fullname,
                'email'=>$request->email,
                'Username'=>$request->Username,
                'password'=>Hash::make($request->Password,)
            ]);
            if($user){
              return back()->with('sucess','New user have sucessfully been added');
            }else{
                return back()->with('fail', 'Something went wrong, try again later');
            }
    }
    function check(Request $request){
      $request->validate([
        'email'=>'required|email',
        'Password'=>'required|min:5|max:12'
      ]);
      $userinfo = User::where('email', '=', $request->email)->first();
      if(!$userinfo){
        return back()->with('fail', "This user does not exist");
      }else{
        if(Hash::check($request->Password, $userinfo->password)){
                 $request->session()->put('LoggedUser', $userinfo->id);
                 return redirect('/userdashboard');
        }else{
            return back()->with('fail', 'Incorrect password');
        }
      }
    }

    function dashboard(){
      $data = ['LoggedUserInfo'=>User::where('id', '=', session('LoggedUser'))->first()];
    return view('userdashboard', $data);
    }
}
?>
