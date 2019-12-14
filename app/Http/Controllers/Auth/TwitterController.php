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

    public function redirect()
    {
        return Socialite::driver('twitter')->redirect();
    }
 
    public function callback()
    {
               
        $getInfo = Socialite::driver('twitter')->user();
         
        $user = $this->createUser($getInfo,'twitter');
 
        auth()->login($user);
 
        return redirect()->to('/home');
 
    }
   function createUser($getInfo){
 
     $user = User::where('twitter_id', $getInfo->id)->first();
 
     if (!$user) {
         $user = User::create([
            'name'     => $getInfo->name,
            'email'    => $getInfo->email,
            'provider' => 'twitter',
            'twitter_id' => $getInfo->id
        ]);
      }
      return $user;
   }

}