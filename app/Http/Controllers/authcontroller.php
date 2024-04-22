<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Laravel\Socialite\Facades\Socialite;

class authcontroller extends Controller
{
    function index(){
        return view('index');
    }


    function redirect(){
        return Socialite::driver('google')->redirect();
    }

    function callback(){

        $user = Socialite::driver('google')->user();
        $id = $user->id;
        $email = $user->email;
        $name = $user->name;
        $avatar = $user->avatar;

        $check=User::Where('email',$email)->count();
        
        if ($check > 0) {
        $avatar_file = $id."jpg";
        $fileContent = file_get_contents($avatar);
        File::put(public_path("admin/images/faces/$avatar_file"),$fileContent);


        $user = User::updateOrCreate(['email' => $email],
            ['name' => $name,'google_id' => $id,'avatar' => $avatar_file]
        );
        
        Auth::login($user);
        return redirect ()->to('dashboard');
        // $user->token
        }else
        return redirect ()->to('auth')->with('error','email is not permitted to access this page');;
    }

    function logout(){
        Auth::logout();
        return redirect()->to('auth');
    }
}
