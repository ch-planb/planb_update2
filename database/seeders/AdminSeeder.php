<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Admin::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin@gmail.com'),
        ]);
    }
}