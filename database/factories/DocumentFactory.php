<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Document::class, function (Faker $faker) {
    return [
        'firstname' => $faker->firstName($gender='male'),
        'lastname'=>$faker->lastName,
        'is_admin'=>false,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),


    ];
});
