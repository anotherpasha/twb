<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\SocialAccountService;
use Illuminate\Http\Request;
use Socialite;
use Redirect;
use Request as Req;

class SocialAuthController extends Controller
{
    private $service;

    public function __construct(SocialAccountService $service)
    {
        $this->service = $service;
    }

    public function redirect(Request $request, $provider)
    {
        // $request->session()->flash('social_action', $socialAction);
        return Socialite::driver($provider)->redirect();
    }

    public function callback(Request $request, $provider)
    {
        $socialUser = Socialite::driver($provider)->user();
        // $socialAction = $request->session()->get('social_action');

        $oldInputs = [
            'name' => $socialUser->getName(),
            'email' => $socialUser->getEmail(),
            'provider_user_id' => $socialUser->getId(),
            'provider' => $provider
        ];

        if ($user = $this->isExistingUser($socialUser->getEmail())) {
            auth()->login($user);
        } else {
            session()->flash('_old_input', $oldInputs);
            return redirect('register');
        }

        return Redirect::intended();
    }

    private function isExistingUser($email)
    {
        return $this->service->getUserByEmail($email);
    }
}