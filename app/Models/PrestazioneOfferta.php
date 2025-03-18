<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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