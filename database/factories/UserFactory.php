<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => 'root',
        'email' => 'root',
        'lname' => 'root',
        'genre' => null,
        'avatar' => 'storage/avatars/root.jpg',
        'role' => 7,
        'password' => '$2y$10$aDdn1CfOlKwMiwvgIctGYOMrMx2RUaR76Z0Qb1.YC/tBxr5GPq7ai', // secret
        'remember_token' => str_random(10),
        'provider' => null,
        'provider_id' => null,
        'municipio' => null,
        'provincia' => null,
    ];
});
