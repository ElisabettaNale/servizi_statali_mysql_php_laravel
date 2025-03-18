<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\PrestazioneOfferta;
   
class PrestazioneOffertaController extends Controller
{
    
    public function index()
    {
        return response()->json(PrestazioneOfferta::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'tempo_risparmiato' => 'required|numeric|min:0',
        ]);

        $prestazione = PrestazioneOfferta::create($request->all());
        return response()->json($prestazione, 201);
    }

    public function update(Request $request, $id)
    {
        $prestazione = PrestazioneOfferta::findOrFail($id);
        $prestazione->update($request->all());

        return response()->json($prestazione);
    }

    public function patchUpdate(Request $request, $id)
    {
        $prestazione = PrestazioneOfferta::findOrFail($id);

        $request->validate([
            'nome' => 'string|max:255',
            'tempo_risparmiato' => 'numeric|min:0',
        ]);

        $prestazione->update($request->only(['nome', 'tempo_risparmiato']));

        return response()->json($prestazione);
    }

    public function destroy($id)
    {
        $prestazione = PrestazioneOfferta::findOrFail($id);
        $prestazione->delete();

        return response()->json(null, 204);
    }
    
}
