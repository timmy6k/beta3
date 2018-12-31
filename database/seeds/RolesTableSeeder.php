<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Role::insert([
            'name' => 'none',
            'created_by' => 1,
            'created_at' => now(),
        ]);

        \App\Role::insert([
            'name' => 'waffle',
            'created_by' => 1,
            'created_at' => now(),
        ]);

        \App\Role::insert([
            'name' => 'dev',
            'created_by' => 1,
            'created_at' => now(),
        ]);

        \App\Role::insert([
            'name' => 'super admin',
            'created_by' => 1,
            'created_at' => now(),
        ]);

        \App\Role::insert([
            'name' => 'admin',
            'created_by' => 1,
            'created_at' => now(),
        ]);

        \App\Role::insert([
            'name' => 'user',
            'created_by' => 1,
            'created_at' => now(),
        ]);
    }
}
