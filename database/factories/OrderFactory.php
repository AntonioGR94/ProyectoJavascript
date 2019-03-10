<?php

use Faker\Generator as Faker;
use App\Order;

$factory->define(App\Order::class, function (Faker $faker) {
    return [
        'user_id' => random_int(1,2)
    ];
});
