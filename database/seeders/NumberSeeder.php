<?php

namespace Database\Seeders;

use App\Models\Number;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Number::create([

            'num'=>'1'
        ]);
        Number::create([

            'num'=>'2'
        ]);
        Number::create([

            'num'=>'3'
        ]);
        Number::create([

            'num'=>'4'
        ]);
    }
}
