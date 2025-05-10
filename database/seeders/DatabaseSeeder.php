<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\StatusSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Administrator',
            'email' => 'test@example.com',
            'password' => Hash::make('AdminPassword')
        ]);
        $this->call([
            StatusSeeder::class
        ]);
    }
}
