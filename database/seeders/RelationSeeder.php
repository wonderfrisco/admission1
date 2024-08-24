<?php

namespace Database\Seeders;

use App\Models\Relation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Relation::create([
            'name' => 'Father'
        ]);
        Relation::create([
            'name' => 'Mother'
        ]);
        Relation::create([
            'name' => 'Aunty'
        ]);
        Relation::create([
            'name' => 'Uncle'
        ]);
        Relation::create([
            'name' => 'GrandMother'
        ]);
        Relation::create([
            'name' => 'GrandFather'
        ]);
        Relation::create([
            'name' => 'Sister'
        ]);
        Relation::create([
            'name' => 'Friend'
        ]);
        Relation::create([
            'name' => 'Brother'
        ]);
        Relation::create([
            'name' => 'Nice'
        ]);
        Relation::create([
            'name' => 'Nephew'
        ]);
        Relation::create([
            'name' => 'Mother-In-law'
        ]);
        Relation::create([
            'name' => 'Father-In-law'
        ]);
        Relation::create([
            'name' => 'Brother-In-law'
        ]);
        Relation::create([
            'name' => 'Sister-In-law'
        ]);
        Relation::create([
            'name' => 'other'
        ]);
    }
}
