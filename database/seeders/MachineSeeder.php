<?php

namespace Database\Seeders;

use App\Models\Machine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MachineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Machine::insert([
            [
                'model' => 'T250B',
                'serie' => 'ADBA8182-234OSIS',
                'slug' => Str::slug('ADBA8182-234OSIS'),
            ],
            [
                'model' => '760D',
                'serie' => 'ADBA8ASD-2ASD',
                'slug' => Str::slug('ADBA8ASD-2ASD'),
            ],
            [
                'model' => 'Feller E',
                'serie' => 'AS82I-2JH3J',
                'slug' => Str::slug('AS82I-2JH3J'),
            ],
        ]);
    }
}
