<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(2)->create();

        User::factory()->create([
            'name' => 'User',
            'email' => 'user@miner.com',
            'type' => 0
        ]);

        User::factory()->create([
             'name' => 'Admin',
             'email' => 'admin@miner.com',
             'type' => 1
         ]);
    }
}
