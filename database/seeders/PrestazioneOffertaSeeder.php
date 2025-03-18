<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PrestazioneOfferta;

class PrestazioneOffertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // PrestazioneOfferta::factory()->create([
        //     "nome" => 'Compilazione Modello 730',
        //     "tempo_risparmiato" => 45
        // ]);
        // PrestazioneOfferta::factory()->create([
        //     "nome" => 'Richiesta SPID',
        //     "tempo_risparmiato" => 20
        // ]);       
        // PrestazioneOfferta::factory()->create([
        //     "nome" => 'Richiesta bonus bollette',            
        //     "tempo_risparmiato" => 30
        // ]);

        PrestazioneOfferta::factory()->count(10)->create();
        
    }
}
