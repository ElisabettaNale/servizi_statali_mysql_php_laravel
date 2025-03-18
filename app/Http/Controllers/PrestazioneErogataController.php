<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrestazioneErogata;

class PrestazioneErogataController extends Controller
{
    public function index()
    {
        return response()->json(PrestazioneErogata::with('tipologia')->get());
    }

    public function store(Request $request)
    {
        $request->validate([
            'data_vendita' => 'required|date',
            'tipologia_id' => 'required|exists:prestazioni_offerte,id',
            'quantita' => 'required|integer|min:1',
        ]);

        $prestazione = PrestazioneErogata::create($request->all());
        return response()->json($prestazione, 201);
    }

    public function update(Request $request, $id)
    {
        $prestazione = PrestazioneErogata::findOrFail($id);
        $prestazione->update($request->all());

        return response()->json($prestazione);
    }

    public function patchUpdate(Request $request, $id)
    {
        $prestazione = PrestazioneErogata::findOrFail($id);

        $request->validate([
            'data_vendita' => 'date',
            'tipologia_id' => 'exists:prestazioni_offerte,id',
            'quantita' => 'integer|min:1',
        ]);

        $prestazione->update($request->only(['data_vendita', 'tipologia_id', 'quantita']));
 
        return response()->json($prestazione);
    }

    public function destroy($id)
    {
        $prestazione = PrestazioneErogata::findOrFail($id);
        $prestazione->delete();

        return response()->json(null, 204);
    }
}
