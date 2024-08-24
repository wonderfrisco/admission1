<?php

namespace Database\Seeders;

use App\Models\House;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        House::create([

            'name'=>'CECILIA AGGREY MENSAH',
            'color_id'=>4,
            'number_id'=>3,
            'gender_id'=>2,
            'size'=>'1'
        ]);
        House::create([

            'name'=>'EA LAMPTEY',
            'color_id'=>1,
            'number_id'=>4,
            'gender_id'=>1,
            'size'=>'120'
        ]);
        House::create([

            'name'=>'GYESI NIMAKO',
            'color_id'=>3,
            'number_id'=>1,
            'gender_id'=>1,
            'size'=>'100'
        ]);
        House::create([

            'name'=>'JOYCE OSEI AGYEKUM',
            'color_id'=>2,
            'number_id'=>3,
            'gender_id'=>2,
            'size'=>'100'
        ]);
        House::create([

            'name'=>'KATE BANNERMAN',
            'color_id'=>3,
            'number_id'=>1,
            'gender_id'=>2,
            'size'=>'100'
        ]);
        House::create([

            'name'=>'LOMO JONES',
            'color_id'=>4,
            'number_id'=>3,
            'gender_id'=>1,
            'size'=>'100'
        ]);
        House::create([

            'name'=>'LOVE GBEDEMAH',
            'color_id'=>1,
            'number_id'=>4,
            'gender_id'=>2,
            'size'=>'100'
        ]);
        House::create([

            'name'=>'OWUSU BOSSMAN',
            'color_id'=>2,
            'number_id'=>3,
            'gender_id'=>1,
            'size'=>'100'
        ]);

    }
}
