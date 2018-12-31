<?php

use Illuminate\Database\Seeder;

class MaterialTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = \App\User::where('is_active', 1)->whereIn('material_role', [2, 4])->pluck('id')->all();
        $numberOfUsers = count($users);

        \App\MaterialType::insert([
            'name' => 'powder',
            'created_by' => rand(1, $numberOfUsers),
            'created_at' => now(),
        ]);

        \App\MaterialType::insert([
            'name' => 'project',
            'created_by' => rand(1, $numberOfUsers),
            'created_at' => now(),
        ]);

        \App\MaterialType::insert([
            'name' => 'lid',
            'created_by' => rand(1, $numberOfUsers),
            'created_at' => now(),
        ]);

        \App\MaterialType::insert([
            'name' => 'scoop',
            'created_by' => rand(1, $numberOfUsers),
            'created_at' => now(),
        ]);

        \App\MaterialType::insert([
            'name' => 'bottle',
            'created_by' => rand(1, $numberOfUsers),
            'created_at' => now(),
        ]);


    }
}
