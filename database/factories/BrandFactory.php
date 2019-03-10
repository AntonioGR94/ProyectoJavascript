<?php

use Faker\Generator as Faker;
use App\Brand;

$factory->define(App\Brand::class, function (Faker $faker) {
  $name = $faker->company();

    return [
      'user_id'     => random_int(1,2),
      'name'        => $name,
      'slug'        => str_slug($name),
      'url'         => $faker->domainName(),
      'createDate'  => $faker->date($format = 'Y-m-d')

    ];
});
