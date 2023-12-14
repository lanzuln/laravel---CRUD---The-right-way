<?php

namespace Database\Seeders;

use App\Models\User;
use App\Constants\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'role' => Role::ADMIN,
            'password' => Hash::make(1234),
        ]);

        User::factory()->create([
            'name' => 'seller',
            'email' => 'seller@gmail.com',
            'password' => Hash::make(1234),
        ]);
    }
}
