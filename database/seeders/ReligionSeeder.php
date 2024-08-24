<?php

namespace Database\Seeders;

use App\Models\Religion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        

        Religion::create([

            'name'=>'Catholic'
        ]);
        Religion::create([

            'name'=>'Protestants (Anglican, Lutheran, Presbyterian, Methodist, etc.)'
        ]);
        Religion::create([

            'name'=>'Pentecostal/Charismatic (Apostolic, Pentecost, Assemblies, etc.)'
        ]);
        Religion::create([

            'name'=>'Other Christian'
        ]);
        Religion::create([

            'name'=>'Islam/Ahmadis'
        ]);
        Religion::create([

            'name'=>'Traditionalist'
        ]);
        Religion::create([

            'name'=>'No Religion'
        ]);
    }
}
