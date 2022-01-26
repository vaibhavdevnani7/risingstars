<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
use Socialite;
use Auth;
use App\Models\User;

class SocialController extends Controller
{

    public function gRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function gCallback()
    {
        try{
                $gUser = Socialite::driver('google')->user();
                
                $user = User::where('email', $gUser->email)->first();

                if($user){
                    if($user->signup_via=='Google')
                    {
                        Auth::login($user);
                        return redirect('/');
                    }
                    else{
                        return redirect('/login')->with('message','Email address has account with another login mode.');
                    }
                }
                else{
                    $newUser = User::create([
                        'name' => $gUser->name,
                        'email' => $gUser->email,
                        'google_id'=> $gUser->id,
                        'password' => encrypt('123456dummy'),
                        'email_verified_at'=>date('Y-m-d h:i:s'),
                        'profile_photo_path'=>$gUser->avatar,
                        'social_signup_response'=>json_encode($gUser->user),
                        'signup_via'=>'Google'
                    ]);
                    Auth::login($newUser);
                    return redirect('/');
                }
            } catch (Exception $e) {
                dd($e->getMessage());
            }
    }

    public function loginwithTwitter()
    {
        return Socialite::driver('twitter')->redirect();
    }
       

    public function cbTwitter()
    {
        try {
     
            $user = Socialite::driver('twitter')->user();
      
            $userWhere = User::where('twitter_id', $user->id)->first();
      
            if($userWhere){
      
                Auth::login($userWhere);
     
                return redirect('/home');
      
            }else{
                $gitUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'twitter_id'=> $user->id,
                    'oauth_type'=> 'twitter',
                    'password' => encrypt('admin595959')
                ]);
     
                Auth::login($gitUser);
      
                return redirect('/home');
            }
     
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    public function linkeDinRedirect()
    {
        return Socialite::driver('linkedin')->redirect();
    }


    public function linkeDinCallback()
    {
        try {

            $linkdinUser = Socialite::driver('linkedin')->user();
            $existUser = User::where('email', $linkdinUser->email)->first();
            
            if($existUser) {

                if($existUser->signup_via=='Linkedin')
                {
                    Auth::login($existUser);
                    return redirect('/');
                }
                else{
                    return redirect('/login')->with('message','Email address has account with another login mode.');
                }
            }
            else {
                $user = new User;
                $user->name = $linkdinUser->name;
                $user->email = $linkdinUser->email;
                $user->linkedin_id = $linkdinUser->id;
                $user->password = md5(rand(1,10000));
                $user->email_verified_at=date('Y-m-d h:i:s');
                $user->profile_photo_path=$linkdinUser->avatar;
                $user->social_signup_response=json_encode($linkdinUser->user);
                $user->signup_via  ='Linkedin';
                
                $user->save();
                Auth::loginUsingId($user->id);
            }
            return redirect()->to('/');
        } 
        catch (Exception $e) {
            return 'error';
        }
    }

    public function twitterRedirect()
    {
        return Socialite::driver('twitter')->redirect();
    }


    public function twitterCallback()
    {
        try {

            $linkdinUser = Socialite::driver('twitter')->user();
            $existUser = User::where('email', $linkdinUser->email)->first();
            
            if($existUser) {

                if($existUser->signup_via=='twitter')
                {
                    Auth::login($existUser);
                    return redirect('/');
                }
                else{
                    return redirect('/login')->with('message','Email address has account with another login mode.');
                }
            }
            else {
                $user = new User;
                $user->name = $linkdinUser->name;
                $user->email = $linkdinUser->email;
                $user->linkedin_id = $linkdinUser->id;
                $user->password = md5(rand(1,10000));
                $user->email_verified_at=date('Y-m-d h:i:s');
                $user->profile_photo_path=$linkdinUser->avatar;
                $user->social_signup_response=json_encode($linkdinUser->user);
                $user->signup_via  ='Twitter';
                
                $user->save();
                Auth::loginUsingId($user->id);
            }
            return redirect()->to('/');
        } 
        catch (Exception $e) {
            return 'error';
        }
    }
    
}