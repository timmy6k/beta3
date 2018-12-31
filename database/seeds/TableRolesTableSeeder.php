<?php

use Illuminate\Database\Seeder;

class TableRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Tablerole::insert([
            'name' => 'none',
            'created_at' => now(),
        ]);

        \App\Tablerole::insert([
            'name' => 'author',
            'created_at' => now(),
        ]);

        \App\Tablerole::insert([
            'name' => 'approver',
            'created_at' => now(),
        ]);

        \App\Tablerole::insert([
            'name' => 'full',
            'created_at' => now(),
        ]);
    }
}
