<?php

namespace Database\Seeders;

use App\Models\Living;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LivingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Living::create([
            'name' => 'Alive',
        ]);
        Living::create([
            'name' => 'Deceased',
        ]);
    }
}
