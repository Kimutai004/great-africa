<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Seed an admin user for the admin panel.
        // Admin login uses Laravel default auth against the `users` table.
        \App\Models\User::updateOrCreate(
            ['email' => 'admin@greatafrica.test'],
            [
                'name' => 'Great Africa Admin',
                'password' => bcrypt('admin123'),
            ]
        );
    }
}

