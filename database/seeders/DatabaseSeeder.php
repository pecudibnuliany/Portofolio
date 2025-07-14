<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\About;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'atmin',
            'usertype' => 'admin',
            'email' => 'atmin@gmail.com',
            'password' => Hash::make('@lianY17#'),
        ]);

       
    }
}
