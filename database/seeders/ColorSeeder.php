<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Color::factory()->create([
            'name' => 'Red',
            'hex' => '#FF0000',
        ]);


        Color::factory()->create([
            'name' => 'Green',
            'hex' => '#00FF00',
        ]);


        Color::factory()->create([
            'name' => 'Blue',
            'hex' => '#0000FF',
        ]);
    }
}
