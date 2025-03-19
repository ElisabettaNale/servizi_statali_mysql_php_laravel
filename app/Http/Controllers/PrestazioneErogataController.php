<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrestazioneErogata;

// PrestazioneErogataController is a controller class that handles 
// CRUD operations for PrestazioneErogata resources
class PrestazioneErogataController 
{

    // Returns a JSON response containing all PrestazioneErogata resources, 
    // including their related tipologia data
    public function index()
    {
        return response()->json(PrestazioneErogata::with('tipologia')->get());
    }

    // Creates a new PrestazioneErogata resource based on the validated 
    // request data and returns the newly created resource as a JSON 
    // response with a 201 status code
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

    // Updates an existing PrestazioneErogata resource with the specified
    // $id using the request data and returns the updated resource as 
    // a JSON response
    public function update(Request $request, $id)
    {
        $prestazione = PrestazioneErogata::findOrFail($id);
        $prestazione->update($request->all());

        return response()->json($prestazione);
    }

    // Partially updates an existing PrestazioneErogata resource 
    // with the specified $id using the validated request data and 
    // returns the updated resource as a JSON response
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

    // Deletes a PrestazioneErogata resource with the specified $id and 
    // returns a JSON response with a 204 status code indicating no content.
    public function destroy($id)
    {
        $prestazione = PrestazioneErogata::findOrFail($id);
        $prestazione->delete();

        return response()->json(null, 204);
    }
}
