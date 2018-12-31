<?php

use Faker\Generator as Faker;

$factory->define(App\Inventory::class, function (Faker $faker) {
    $users = \App\User::where('is_active', 1)->whereIn('material_role', [4])->pluck('id')->all();
    $numberOfUsers = count($users);

    $materials = \App\Material::pluck('id')->all();
    $numberOfMaterials = count($materials);
    return [

        'created_by' => rand(1, $numberOfUsers),
        'approved_by' => rand(1, $numberOfUsers),
        'material_id' => rand(1, $numberOfMaterials),
        'status' => rand(0, 2),
        'expiration_date' => now()->addWeeks(rand(1,52)),
        'quantity' => rand(1,1000),
        'created_at' => now()
    ];
});
