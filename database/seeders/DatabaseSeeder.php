<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            "name"     => "system",
            "email"    => "take.yama0519@gmail.com",
            "password" => Hash::make("customized_system"),
            "role"     => 1,
            "is_valid" => 1
        ]);
    }
}
