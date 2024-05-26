<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create a single user account
        User::create([
            'username' => 'admin',
            'password' => Hash::make('jsmemorableevents'),
        ]);
    }
}
