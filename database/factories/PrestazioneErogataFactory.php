<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PrestazioneErogata;

class PrestazioneErogataFactory extends Factory
{
    protected $model = PrestazioneErogata::class;
    
    public function definition()
    {
        return [
            'data_vendita' => fake()->date(),
            'tipologia_id' => fake()->numberBetween(1, 3),
            'quantita' => fake()->numberBetween(1, 10),
        ];
    }
}