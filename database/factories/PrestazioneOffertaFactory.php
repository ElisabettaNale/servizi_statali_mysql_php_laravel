<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PrestazioneOfferta;

class PrestazioneOffertaFactory extends Factory
{
    protected $model = PrestazioneOfferta::class;

    public function definition()
    {
        return [
            'nome' => fake()->unique()->name(),
            'tempo_risparmiato' => fake()->randomNumber()
        ];
    }
}