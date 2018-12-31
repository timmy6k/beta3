<?php

use Faker\Generator as Faker;

$factory->define(App\Material::class, function (Faker $faker) {

    $users = \App\User::where('is_active', 1)->whereIn('material_role', [4])->pluck('id')->all();
    $numberOfUsers = count($users);
    return [

        'created_by' => rand(1, $numberOfUsers),
        'approved_by' => rand(1, $numberOfUsers),
        'material_type_id' => rand(1, 3),
        'name' => str_random(10),
        'description' => rtrim($faker->sentence(rand(5, 10)), "."),
        'status' => rand(0, 2),
        'created_at' => now(),
    ];
});
