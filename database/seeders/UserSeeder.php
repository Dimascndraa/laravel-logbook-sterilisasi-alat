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
        User::create([
            'name' => "Dimas Candra Pebriyanto",
            'email' => "dimascndraa18@gmail.com",
            'email_verified_at' => now(),
            'username' => 'd.candra',
            'password' => bcrypt('password'),
            'role' => 'superadmin',
        ]);
        User::create([
            'name' => "Admin",
            'email' => "admin@dummy.com",
            'email_verified_at' => now(),
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'role' => 'admin',
        ]);
        User::create([
            'name' => "User",
            'email' => "user@dummy.com",
            'email_verified_at' => now(),
            'username' => 'user',
            'password' => bcrypt('user'),
            'role' => 'user',
        ]);
    }
}
