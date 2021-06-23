<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Log;

class UserGoogleController extends Controller
{
    public function googleNewLogin(Request $user_request)  
	{
		$google_client = new \Google_Client();
		$google_client->setClientId('48891398467-32r7o93bqte1nm5u82m7hedc3emnosrr.apps.googleusercontent.com');
		$google_client->setClientSecret('lOHuVirH14L02KnBLalZqG5s');
		$google_client->setRedirectUri('http://localhost/mvc2/laravel-crud-app/index.php');
		$google_client->setScopes(array(
			'https://www.googleapis.com/auth/plus.me',
			'https://www.googleapis.com/auth/userinfo.email',
			'https://www.googleapis.com/auth/userinfo.profile',
		));
		$get_google_oauthV2 = new \Google_Service_Oauth2($google_client);
		if ($user_request->get('code')){
			$google_client->authenticate($user_request->get('code'));
			$user_request->session()->put('token', $google_client->getAccessToken());
		}
		if ($user_request->session()->get('token'))
		{
			$google_client->setAccessToken($user_request->session()->get('token'));
		}
		if ($google_client->getAccessToken())
		{
			//For logged in user, get details from google using access token
			$goole_user = $get_google_oauthV2->userinfo->get();  
			   
				$user_request->session()->put('name', $goole_user['name']);
				if ($set_user =User::where('email',$goole_user['email'])->first())
				{
					//logged your user via auth login
				}else{
					//register your user with response data
				}               
		 return redirect()->route('welcome.blade');          
		} else
		{
			//For Guest user, get google login url
			$get_authUrl = $google_client->createAuthUrl();
			return redirect()->to($get_authUrl);
		}
	}
	

}
