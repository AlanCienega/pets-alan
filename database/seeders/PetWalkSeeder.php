<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetWalkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\PetWalk::create([
            'pet_id' => 1,
            'location' => "El parque",
            'walk_date' => '2023-06-15',
            
        ]);
    }
}
