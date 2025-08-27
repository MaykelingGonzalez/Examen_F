<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Responsible;

class ResponsibleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Responsible::create([
            'responsible_code'=> 'RES-001-001',
            'name'=> 'Maykeling Massiel González Estrada',
            'identification'=> '481-201205-1000W',
            'birthdate'=> '2005-12-20',
            'birthplace'=> 'Ocotal - Nueva Segovia',
            'age'=> '19',
            'sex'=> 'F',
            'telephone'=> '+505 1234-5678',
            'email'=> 'maykeling@gmail.com',
            'country'=> 'Nicaragua',
            'nationality'=> 'Nicaragüense',
            'department'=> 'Estelí',
            'municipality'=> 'Estelí',
            'address'=> 'De la gasolinera Uno, 1 cuadra al sur, 2 cuadras al este',
            'marital_status'=> 'Soltera',
            'academic_level'=> 'Técnico',
        ]);

        Responsible::create([
            'responsible_code'=> 'RES-001-002',
            'name'=> 'Juan Carlos Pérez López',
            'identification'=> '123-456789-0000A',
            'birthdate'=> '1990-05-15',
            'birthplace'=> 'Managua - Managua',
            'age'=> '34',
            'sex'=> 'M',
            'telephone'=> '+505 9876-5432',
            'email'=> 'juancarlos@gmail.com',
            'country'=> 'Nicaragua',
            'nationality'=> 'Nicaragüense',
            'department'=> 'Managua',
            'municipality'=> 'Managua',
            'address'=> 'De la UAM, 2 cuadras al norte',
            'marital_status'=> 'Casado',
            'academic_level'=> 'Universitario',
        ]);

        Responsible::create([
            'responsible_code'=> 'RES-001-003',
            'name'=> 'Ana María López',
            'identification'=> '789-012345-0000B',
            'birthdate'=> '1985-08-30',
            'birthplace'=> 'León - León',
            'age'=> '38',
            'sex'=> 'F',
            'telephone'=> '+505 3456-7890',
            'email'=> 'analopez@gmail.com',
            'country'=> 'Nicaragua',
            'nationality'=> 'Nicaragüense',
            'department'=> 'León',
            'municipality'=> 'León',
            'address'=> 'De la catedral, 3 cuadras al este',
            'marital_status'=> 'Divorciada',
            'academic_level'=> 'Maestría',
        ]);
    }
}
