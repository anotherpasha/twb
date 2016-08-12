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

    public function createAccount(ProviderUser $providerUser, $provider)
    {
        $account = new SocialAccount([
            'provider_user_id' => $providerUser->getId(),
            'provider' => $provider
        ]);

        $user = User::whereEmail($providerUser->getEmail())->first();

        if (!$user) {
            $user = User::create([
                'email' => $providerUser->getEmail(),
                'name' => $providerUser->getName(),
            ]);
        }

        $account->user()->associate($user);
        $account->save();

        return $user;
    }

    public function createSocialAccountByData(User $user, array $socialUserData)
    {
        $account = new SocialAccount($socialUserData);

        $account->user()->associate($user);
        $account->save();

        return $account;
    }

    public function createOrGetAccount(ProviderUser $providerUser, $provider)
    {
        if ($account = $this->getAccount($providerUser, $provider)) {
            return $account->user;
        } else {
            return $this->createAccount($providerUser, $provider);
        }

    }
}