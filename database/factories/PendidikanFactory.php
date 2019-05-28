<?php

use Faker\Generator as Faker;

$factory->define(App\Models\TingkatPendidikan::class, function (Faker $faker) {
    return [
        'nama' => $faker->domainName,
    ];
});
