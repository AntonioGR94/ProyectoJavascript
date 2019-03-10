<?php

use Faker\Generator as Faker;


$factory->define(App\Sneaker::class, function (Faker $faker) {
    $name = ucfirst($faker->words(rand(1,5), true));
    return [
        'brand_id'  => random_int(1,5),
        'name'         => $name,
        'slug'          => str_slug($name, "-"),
        'description'   => $faker->text(500),
        'release'        => $faker->date($format = 'Y-m-d', $max = 'now'),
        'price'        => $faker->numberBetween($min = 50, $max = 1000),
        'sport'        => $faker->words(rand(1,5), true),
        'colorway'        => $faker->words(rand(1,15), true),
        'size'        => $faker->numerify('US ##'),
        'available'        => $faker->randomElement($array = array ('1','0'))

    ];
});
