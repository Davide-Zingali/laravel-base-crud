<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Device;
use Faker\Generator as Faker;

$factory->define(Device::class, function (Faker $faker) {
    return [
        'name' => ($faker -> word),
        'price' => ($faker -> randomFloat($nbMaxDecimals = 4, $min = 10, $max = 90000)),
        'model' => ($faker -> ean8),
        'consumption' => ($faker -> numberBetween($min = 10, $max = 2000)),
    ];
});
