<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Socialite;
use App\Models\User;
use App\Providers\RouteServiceProvider;

class SocialAuthController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleLogin()
    {
        $googleUser = Socialite::driver('google')->user();
        
        $this->_registerorLoginUser($googleUser);
        return redirect('home');
    }

    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->stateless()->redirect();
    }

    public function facebookLogin()
    {
        $facebookUser = Socialite::driver('facebook')->stateless()->user();
        
        $this->_registerorLoginUser($facebookUser);
        return redirect('home');
    }


    protected function _registerorLoginUser($data)
    {
    	$user = User::where('socialid', $data->id)->first();
    	if(!$user){
    		$user = new User();
            $user->name = $data->name;
            $user->email = $data->email;
            $user->socialid = $data->id;
            $user->save();
    	}
        Auth::login($user);
    }
}
