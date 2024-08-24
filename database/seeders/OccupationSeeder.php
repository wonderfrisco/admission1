<?php

namespace Database\Seeders;

use App\Models\Occupation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OccupationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Occupation::create([

            'name'=>'Accountant',
        ]);
        Occupation::create([

            'name'=>'Administrative Clerk',
        ]);
        Occupation::create([

            'name'=>'Artisan(Mechanic/Hairdresser/Tailor/etc)',
        ]);
        Occupation::create([

            'name'=>'Banking/Financial Institution',
        ]);
        Occupation::create([

            'name'=>'Basic School Teacher',
        ]);
        Occupation::create([

            'name'=>'Business Man/Woman',
        ]);
        Occupation::create([

            'name'=>'Civil Servant',
        ]);
        Occupation::create([

            'name'=>'Clearing/Shipping Agent',
        ]);
        Occupation::create([

            'name'=>'Diplomat',
        ]);
        Occupation::create([

            'name'=>'Director/Senior Civil Servant',
        ]);
        Occupation::create([

            'name'=>'Farmer/Fisherman',
        ]);
        Occupation::create([

            'name'=>'Health(Other Staff)',
        ]);
        Occupation::create([

            'name'=>'Herbalist/Spiritualist',
        ]);
        Occupation::create([

            'name'=>'Housewife',
        ]);
        Occupation::create([

            'name'=>'Labourer',
        ]);
        Occupation::create([

            'name'=>'Lawyer/Judge/Magistrate',
        ]);
        Occupation::create([

            'name'=>'Media/Journalist',
        ]);
        Occupation::create([

            'name'=>'Medical',
        ]);
        Occupation::create([

            'name'=>'Middle Level Official(Private/NGO)',
        ]);
        Occupation::create([

            'name'=>'Military/Paramilitary Officer',
        ]);
        Occupation::create([

            'name'=>'Non-Commissioned Officer',
        ]);
        Occupation::create([

            'name'=>'Parliamentarial/Minister of State',
        ]);
        Occupation::create([

            'name'=>'Pastor/Minister of Religion',
        ]);
        Occupation::create([

            'name'=>'Pensioner/Retired',
        ]);
        Occupation::create([

            'name'=>'Petty Trader',
        ]);
        Occupation::create([

            'name'=>'Public Servant',
        ]);
        Occupation::create([

            'name'=>'Security Services',
        ]);
        Occupation::create([

            'name'=>'Self Employed',
        ]);
        Occupation::create([

            'name'=>'Senior Official(Private/NGO)',
        ]);
        Occupation::create([

            'name'=>'Teacher(Senior High)',
        ]);
        Occupation::create([

            'name'=>'Technician',
        ]);
        Occupation::create([

            'name'=>'Traditional Ruler',
        ]);
        Occupation::create([

            'name'=>'Unemployed',
        ]);
        Occupation::create([

            'name'=>'University Lecturer',
        ]);
        Occupation::create([

            'name'=>'Other',
        ]);
    }

}
