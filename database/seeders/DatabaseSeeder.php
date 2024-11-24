<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\BlogSeeder;
use Database\Seeders\BlogSeeder as SeedersBlogSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create 10 blog entries

        $this->call(SeedersBlogSeeder::class);
        // Create an admin user
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
            'phone' => '085239023123',
            'photo' => 'pp.jpg'
        ]);
    }

}
