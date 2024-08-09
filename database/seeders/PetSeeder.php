<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Pet::create(
            ['name' => 'Buddy',
            'description' => 'Macho raza pequeña',
            'type' => 'Dog',
            'birth_date' => '2018-05-15']
        );
    }
}
