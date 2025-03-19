<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\PrestazioneOfferta;
   
// PrestazioneOffertaController is a controller class that handles 
// CRUD operations for PrestazioneOfferta resources
class PrestazioneOffertaController 
{
    
    // Retrieves a list of all Prestazione Offerta resources 
    // and returns them as a JSON response
    public function index()
    {
        return response()->json(PrestazioneOfferta::all());
    }

    // Creates a new Prestazione Offerta resource based on the data 
    // provided in the request, validates the input, and returns
    // the newly created resource as a JSON response with a 201 status code
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'tempo_risparmiato' => 'required|numeric|min:0',
        ]);

        $prestazione = PrestazioneOfferta::create($request->all());
        return response()->json($prestazione, 201);
    }

    // Updates an existing Prestazione Offerta resource with the 
    // provided ID, using the data from the request, and returns 
    // the updated resource as a JSON response
    public function update(Request $request, $id)
    {
        $prestazione = PrestazioneOfferta::findOrFail($id);
        $prestazione->update($request->all());

        return response()->json($prestazione);
    }

    // Partially updates an existing Prestazione Offerta resource with the 
    // provided ID, using the data from the request, and returns the 
    // updated resource as a JSON response
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

    // Deletes a Prestazione Offerta resource with the provided ID and 
    // returns a JSON response with a 204 status code, indicating that 
    // the resource has been deleted
    public function destroy($id)
    {
        $prestazione = PrestazioneOfferta::findOrFail($id);
        $prestazione->delete();

        return response()->json(null, 204);
    }
    
}
