<?php

use App\Genre;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement($array = array('Men', 'Women', "Kids")),
    ];
});
