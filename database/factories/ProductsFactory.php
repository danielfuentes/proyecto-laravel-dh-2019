<?php

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence($nbWords = 3),
        'description' => $faker->sentence($nbWords = 10),
        //"genre" => $faker->randomElement($array = array('Woman', 'Man', "Kids")), Cree nueva tabla (laureano)
        "genre_id" => $faker->numberBetween($min=1, $max=3),
        "category_id" => $faker->numberBetween($min=1, $max=3),
        "size_id" => $faker->numberBetween($min=1, $max=3),
        "price" => $faker->numberBetween($min=999, $max=9999),
        "stock" => $faker->numberBetween($min=50, $max=150),
        "imageLoc" =>$faker->imageUrl($width = 640, $height = 480),
        "imageLoc2" =>$faker->imageUrl($width = 640, $height = 480),
        //"imageLoc" => 'storage/products/image-placeholder_1.png',
        //"imageLoc2" => 'storage/products/image-placeholder_1.png',
    ];  
});
