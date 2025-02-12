<?php

namespace Database\Seeders;

use App\Models\User;
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

        $user = new User();
        $user->name = "Admin";
        $user->email = "admin@admin.com";
        $user->user_type = 1;
        $user->is_active = 1;
        $user->password = Hash::make('123456');
        $user->save();
    }
}
