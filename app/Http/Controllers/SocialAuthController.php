<?php

namespace App\Http\Controllers;

use App\SocialAccountService;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{

	/**
	 * Redirect User to facebook console
	 *
	 * @return mixed
	 */
	public function redirect()
	{
		return Socialite::driver('facebook')->redirect();
	}


	/**
	 * Facebook Return with the Token
	 *
	 * @param SocialAccountService $service
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function callback(SocialAccountService $service)
	{
		dd(Socialite::driver('facebook')->user());

		#$user = $service->createOrGetUser(Socialite::driver('facebook')->user());

		#if(isset($user))
		#{
		#	auth()->login($user);
		#
		#	return redirect()->route('home');
		#}
	}
}
