<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;
use App\SocialAccountService;

class SocialAccountServiceTest extends TestCase
{
    use DatabaseTransactions;
    use DatabaseMigrations;


    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetUserByEmail()
    {
        $user = [
            'email' => 'babi@gmail.com',
            'name'  => 'babi',
            'password' => 'asdfasdfasdfasdfasdf',
            'remember_token' => 'asdfasdfasdfasdfasdf',
            'city'  => 'Jakarta',
            'address'   => 'address',
            'phone' => '081808180818'
        ];
        $user = User::create($user);

        $service = new SocialAccountService();
        $expectedUser = $service->getUserByEmail('babi@gmail.com');
        $this->assertEquals('babi', $expectedUser->name);
    }

    public function testCreateSocialAccountByData()
    {
        factory(App\User::class, 1)->create();
        $user = User::first();
        $service = new SocialAccountService();
        $socialAccount = $service->createSocialAccountByData($user, ['provider_user_id' => '0128u38u84', 'provider' => 'facebook']);
        $this->assertEquals($socialAccount->provider, 'facebook');
    }


}
