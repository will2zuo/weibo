<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(User::class, function (Faker $faker) {
    $dateTime = $faker->date.' '.$faker->time;
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$P08V/9StC3c28OkTifJUMej8g9MMYsUCwm1/Gu.QHLR7B3uATnSgy', // 111111
        'remember_token' => Str::random(10),
        'created_at' => $dateTime,
        'updated_at' => $dateTime,
    ];
});
