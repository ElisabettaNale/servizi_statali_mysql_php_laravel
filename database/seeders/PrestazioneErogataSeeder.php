<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PrestazioneOfferta;
use App\Models\PrestazioneErogata;
use Database\Factories\PrestazioneErogataFactory;

class PrestazioneErogataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        // PrestazioneErogata::factory()->create([
        //     "data_vendita" => '2025-03-14',
        //     "tipologia_id" => 1,
        //     "quantita" => 7
        // ]);
        // PrestazioneErogata::factory()->create([
        //     "data_vendita" => '2025-03-16',
        //     "tipologia_id" => 2,
        //      "quantita" => 8
        // ]);       
        // PrestazioneErogata::factory()->create([
        //     "data_vendita" => '2025-03-16',            
        //     "tipologia_id" => 1,
        //      "quantita" => 4
        // ]);
        // PrestazioneErogata::factory()->create([
        //     "data_vendita" => '2025-03-18',
        //     "tipologia_id" => 2,
        //      "quantita" => 10
        // ]);  

        if (PrestazioneOfferta::count() === 0) {
            $this->call(PrestazioneOffertaSeeder::class);
        }

        PrestazioneErogata::factory()
            ->count(5)
            ->create();


    }
}
