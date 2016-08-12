<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '1809962919290325',
        'client_secret' => 'd7c1d67864d6fb3d9cf1ba788e0462c8',
        'redirect' => 'http://twb.local/auth/callback/facebook',
    ],

    'twitter' => [
        'client_id' => '4MiIuBHv6YvflrUM2jnH18yEm',
        'client_secret' => 'IrNxIqcc4szSbVE5KrTFtQVzZ5c3ywyRC0aaW7He68Bgxq7hqX',
        'redirect' => 'http://twb.local/auth/callback/twitter',
    ],

];
