<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $users = collect([
            // [
            //     'name' => "Administrator",
            //     'email' => 'admin@gmail.com',
            //     'nik' => 'administrator1',
            //     'role' => 'Admin',
            //     'password' => Hash::make('password'),
            // ],
            [
                'name' => "User 1",
                'email' => 'role@gmail.com',
                'username' => 'lead',
                // 'role' => 'lead',
                'password' => Hash::make('password'),
            ],
            [
                'name' => "User 2",
                'email' => 'developer@gmail.com',
                'username' => 'Developer',
                // 'role' => 'Developer',
                'password' => Hash::make('password'),
            ],
            [
                'name' => "User 3",
                'email' => 'leaddeveloper@gmail.com',
                'username' => 'LeadDeveloper',
                // 'role' => 'Lead Developer',
                'password' => Hash::make('password'),
            ],
        ])->map(function ($users) {
            User::create($users);
        });


    }
}
