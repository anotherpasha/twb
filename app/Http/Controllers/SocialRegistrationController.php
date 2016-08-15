<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\SocialAccountService;
use Socialite;
use Redirect;


class SocialRegistrationController extends Controller
{

    private $service;

    public function __construct(SocialAccountService $service)
    {
        $this->service = $service;
    }

    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        $user = $this->service->createOrGetUser(Socialite::driver($provider)->user(), $provider);

        auth()->login($user, true);

        // return redirect()->to('/home');
        return Redirect::intended();
    }

}