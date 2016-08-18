<?php

namespace App;

use Laravel\Socialite\Contracts\User as ProviderUser;

class SocialAccountService
{

    public function getUserByEmail($email)
    {
        return User::whereEmail($email)
            ->first();
    }

    public function getAccount(ProviderUser $providerUser, $provider)
    {
        $account = SocialAccount::whereProvider($provider)
            ->whereProviderUserId($providerUser->getId())
            ->first();

        if ($account) {
            return $account->user;
        }

        return false;
    }

    public function createSocialAccountByData(User $user, array $socialUserData)
    {
        $account = new SocialAccount($socialUserData);

        $account->user()->associate($user);
        $account->save();

        return $account;
    }
}