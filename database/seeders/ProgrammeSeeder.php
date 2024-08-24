<?php

namespace Database\Seeders;

use App\Models\Programme;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgrammeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Programme::create([

            'name'=>'GENERAL SCIENCE',
        ]);
        Programme::create([

            'name'=>'GENERAL ARTS',
        ]);
        Programme::create([

            'name'=>'HOME ECONOMICS',
        ]);
        Programme::create([

            'name'=>'VISUAL ARTS',
        ]);
        Programme::create([

            'name'=>'BUSINESS',
        ]);
        Programme::create([

            'name'=>'AGRICULTURE',
        ]);
    }
}
