<?php

namespace App\Http\Controllers;

use App\Models\PrestazioneErogata;
use Illuminate\Http\Request;

class CalcoliController 
{

    // Get total tempo_risparmiato from all 'prestazioni erogate'
    public function showTempoRisparmiato(Request $request)
    {
        
        // Get parameters from request
        $start = $request->query('start');
        $end = $request->query('end');
        $tipologiaId = $request->query('tipologia_id');

        // Convert tipologia_id into tipologia
        $query = PrestazioneErogata::with('tipologia');

        // Filter by date (if submitted)
        if ($start && $end) {
            $query->whereBetween('data_vendita', [$start, $end]);
        } elseif ($start) {
            $query->where('data_vendita', '>=', $start);
        } elseif ($end) {
            $query->where('data_vendita', '<=', $end);
        }

        // Filter by tipologia_id (if submitted)
        if ($tipologiaId) {
            $query->where('tipologia_id', $tipologiaId);
        }

        // Compute tempo_risparmiato
        $tempoRisparmiato = $query->get()->sum(function ($prestazione) {
            return $prestazione->tipologia->tempo_risparmiato * $prestazione->quantita;
        });

        return response()->json(['tempo_risparmiato_totale' => $tempoRisparmiato]);
    }
}
