<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "Dimas Candra Pebriyanto",
            'email' => "dimascndraa18@gmail.com",
            'email_verified_at' => now(),
            'username' => 'd.candra',
            'password' => bcrypt('password'),

        ]);

        // \App\Models\User::factory(10)->create();
    }
}
