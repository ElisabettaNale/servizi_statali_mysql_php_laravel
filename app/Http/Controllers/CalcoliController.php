<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrestazioneErogata;
use App\Models\PrestazioneOfferta;

class CalcoliController extends Controller
{
    public function showTempoRisparmiato()
    {
        $tempoRisparmiato = PrestazioneErogata::with('tipologia')->get()->sum(function ($prestazione) {
            return $prestazione->tipologia->tempo_risparmiato * $prestazione->quantita;
        });

        return response()->json(['tempo_risparmiato_totale' => $tempoRisparmiato]);
    }
}
