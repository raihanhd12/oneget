<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use DateTime;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            SubscriptionPlanSeeder::class
        ]);

        // \App\Models\User::factory(10)->create();
        $str = Str::random(100);
        $date = new DateTime('now');
        $admin = \App\Models\User::factory()->create([
            'firstName' => 'Admin',
            'lastName' => 'Oneget',
            'email' => 'admin@gmail.com',
            'email_verified_at' => $date,
            'password' => 'admin123',
            'verify_key' => $str
        ]);
        $admin->assignRole('admin');

        $user = \App\Models\User::factory()->create([
            'firstName' => 'User',
            'lastName' => 'Oneget',
            'email' => 'user@gmail.com',
            'email_verified_at' => $date,
            // 'role' => 'user',
            'password' => 'user123',
            'verify_key' => $str
        ]);
        $user->assignRole('user');
    }
}
