<?php

use Faker\Generator as Faker;
use App\Donor;
$factory->define(App\Donor::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'description' => $faker->sentence()
    ];
});
