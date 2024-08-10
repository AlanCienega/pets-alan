<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Pet;

class PetTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function it_can_create_a_pet_and_veriry_its_existence(){
        $data = [
            'name' => 'Frodo',
            'description' => "Central Asian Shepherd Dog",
            'type' => 'dog',
            'birth_date' => '2024-02-01'
        ];
        Pet::create($data);

        $this->assertDatabaseHas('pets', $data);
    }
}
