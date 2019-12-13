<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator,Redirect,Response,File;
use Socialite;
use App\User;
use Auth;




class TwitterController extends Controller
{

    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
 
    public function callback($provider)
    {
               
        $getInfo = Socialite::driver($provider)->user();
         
        $user = $this->createUser($getInfo,$provider);
 
        auth()->login($user);
 
        return redirect()->to('/home');
 
    }
   function createUser($getInfo,$provider){
 
     $user = User::where('twitter_id', $getInfo->id)->first();
 
     if (!$user) {
         $user = User::create([
            'name'     => $getInfo->name,
            'email'    => $getInfo->email,
            'provider' => $provider,
            'twitter_id' => $getInfo->id
        ]);
      }
      return $user;
   }

}