<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\CompanyProfile;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Admin User
        // Check if user exists to avoid duplicates
        if (!User::where('email', 'zonaib@gmail.com')->exists()) {
            User::create([
                'name' => 'Admin',
                'email' => 'zonaib@gmail.com',
                'password' => Hash::make('zonainstalasiban768'),
            ]);
        }

        // Default Company Profile
        if (!CompanyProfile::exists()) {
            CompanyProfile::create([
                'name' => 'My Tech Company',
                'email' => 'info@example.com',
                'hero_title' => 'Innovate Your Future',
                'hero_subtitle' => 'Leading the way in digital solutions.',
            ]);
        }
    }
}
