<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Bidang::class, function (Faker $faker) {
    return [
        'kode_jenis' => $faker->postcode,
        'jenis_pekerjaan' => $faker->jobTitle,
    ];
});

$factory->define(\App\Models\Industri::class, function (Faker $faker) {
    return [
        'kode_jenis' => $faker->postcode,
        'jenis_perusahaan' => $faker->company,
    ];
});

$factory->define(\App\Models\Jabatan::class, function (Faker $faker) {
    return [
        'kode_level' => $faker->postcode,
        'level_pekerjaan' => $faker->jobTitle,
    ];
});
