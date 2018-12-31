<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::insert([
            'name' => 'Timothy Tayson',
            'email' => 'moshimoshi6k@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'remember_token' => str_random(10),
            'is_active' => 1,
            'created_by' => 1,
            'user_role' => 2,
            'material_role' => 4,
            'inventory_role' => 4,
            'mpr_role' => 4,
            'bpr_role' => 4,



        ]);

        factory(App\User::class, 100)->create();
    }
}
