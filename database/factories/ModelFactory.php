<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
        'city' => $faker->city,
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
    ];
});

$factory->define(App\Story::class, function (\Faker\Generator $faker) {
    $users = \App\User::all(['id'])->toArray();
    $userKey = array_rand($users, 1);

    $ninas = ['nina-1.jpg', 'nina-2.jpg', 'nina-3.jpg'];
    $ninaKey = array_rand($ninas, 1);
    return [
        'title'      => $faker->realText('20'),
        'story'      => $faker->paragraph(100, true),
        'user_id'    => $users[$userKey]['id'],
        'image_path'    => $ninas[$ninaKey]
   ];
});
