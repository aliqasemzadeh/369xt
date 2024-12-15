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
        User::unguard();
        User::factory()->create([
            'name' => 'Ali Qasemzadeh',
            'email' => 'aliqasemzadeh7@gmail.com',
            'password' => Hash::make("wswsws@21"),
            'mobile' => '09177886099'
        ]);
    }
}
