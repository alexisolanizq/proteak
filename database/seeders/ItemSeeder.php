<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::create([
            'sku' => '94540b06',
            'quantity' => 8,
            'description' => 'lorem 10',
            'part_number' => 'MRF94540b06',
        ]);
    }
}
