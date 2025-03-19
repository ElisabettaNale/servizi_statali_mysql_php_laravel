<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// The PrestazioneOfferta class is a model that represents 
// a table in a database, specifically the prestazioni_offerte table. 
// It defines nome and tempo_risparmaito as attributes.
// PrestazioneOfferta instance has many PrestazioneErogata instances 
// associated with it, linked by the tipologia_id foreign key.

class PrestazioneOfferta extends Model
{

    use HasFactory;

    protected $table = 'prestazioni_offerte';

    protected $fillable = [
        'nome',
        'tempo_risparmiato'
    ]; 
  
    public function prestazioniErogate()
    {
        return $this->hasMany(PrestazioneErogata::class, 'tipologia_id');
    }

}