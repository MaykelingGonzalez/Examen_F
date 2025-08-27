<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MeasureUnit;

class MeasureUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MeasureUnit::create([
            'name' => 'Metro',
            'symbol' => 'm',
        ]);

        MeasureUnit::create([
            'name' => 'Kilogramo',
            'symbol' => 'kg',
        ]);

        MeasureUnit::create([
            'name' => 'Metro cuadrado',
            'symbol' => 'm²',
        ]);

        MeasureUnit::create([
            'name' => 'Metro cúbico',
            'symbol' => 'm³',
        ]);

        MeasureUnit::create([
            'name' => 'Libra',
            'symbol' => 'lb',
        ]);

        MeasureUnit::create([
            'name' => 'Unidad',
            'symbol' => 'u',
        ]);

        MeasureUnit::create([
            'name' => 'Litro',
            'symbol' => 'L',
        ]);

        MeasureUnit::create([
            'name' => 'Gramo',
            'symbol' => 'g',
        ]);

        MeasureUnit::create([
            'name' => 'Centímetro',
            'symbol' => 'cm',
        ]);



    }
}
