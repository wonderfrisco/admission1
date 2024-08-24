<?php

namespace Database\Seeders;

use App\Models\Disability;
use App\Models\HouseNumber;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Labone Admin',
            'email' => 'admin@gmail.com',
            'phone' => '1234567891',
            'password' => bcrypt('admin'),
        ]);

        $this->call([RegionSeeder::class]);
        $this->call([HouseSeeder::class]);
        $this->call([GenderSeeder::class]);
        $this->call([NumberSeeder::class]);
        $this->call([ColorSeeder::class]);
        $this->call([StatusSeeder::class]);
        $this->call([ProgrammeSeeder::class]);
        $this->call([DisabilitySeeder::class]);
        $this->call([ReligionSeeder::class]);
        $this->call([OccupationSeeder::class]);
        $this->call([LivingSeeder::class]);
        $this->call([RelationSeeder::class]);
    }
}
