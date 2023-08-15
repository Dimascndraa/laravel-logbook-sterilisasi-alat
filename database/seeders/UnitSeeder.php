<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Unit::create([
            'name' => "CSSD",
            'code' => "CSSD",
            'status' => 1,
        ]);

        Unit::create([
            'name' => "Perinatologi",
            'code' => "PERI",
            'status' => 1,
        ]);

        Unit::create([
            'name' => "VK",
            'code' => "VK",
            'status' => 1,
        ]);

        Unit::create([
            'name' => "OK",
            'code' => "OK",
            'status' => 1,
        ]);

        Unit::create([
            'name' => "Poli Obgyn",
            'code' => "OBGYN",
            'status' => 1,
        ]);

        Unit::create([
            'name' => "Poli Anak",
            'code' => "ANAK",
            'status' => 1,
        ]);

        Unit::create([
            'name' => "Poli BEDAH",
            'code' => "BEDAH",
            'status' => 1,
        ]);
    }
}
