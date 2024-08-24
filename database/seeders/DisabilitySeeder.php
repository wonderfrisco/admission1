<?php

namespace Database\Seeders;

use App\Models\Disability;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DisabilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Disability::create([

            'name'=>'No disability',
        ]);
        Disability::create([

            'name'=>'Vision Impairment'
        ]);
        Disability::create([

            'name'=>'Deaf or hard of hearing'
        ]);
        Disability::create([

            'name'=>'Mental health conditions'
        ]);
        Disability::create([

            'name'=>'Intellectual disability'
        ]);
        Disability::create([

            'name'=>'Acquired brain injury'
        ]);
        Disability::create([

            'name'=>'autism spectrum disorder'
        ]);
        Disability::create([

            'name'=>'Physical disability'
        ]);
        Disability::create([

            'name'=>'Dyslexia'
        ]);
        Disability::create([

            'name'=>'Dysgraphia'
        ]);
        Disability::create([

            'name'=>'Dyscalculia'
        ]);
    }
}






