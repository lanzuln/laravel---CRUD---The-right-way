<?php

namespace Database\Seeders;

use App\Constants\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'role' => Role::ADMIN,
        ]);

        User::factory()->create([
            'name' => 'seller',
            'email' => 'seller@gmail.com',
        ]);
    }
}
