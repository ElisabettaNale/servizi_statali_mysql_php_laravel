<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrestazioneErogata extends Model
{

    use HasFactory;

    protected $table = 'prestazioni_erogate';

    protected $fillable = [
        'data_vendita',
        'tipologia_id',
        'quantita'
    ]; 
  
    public function tipologia()
    {
        return $this->belongsTo(PrestazioneOfferta::class, 'tipologia_id');
    }

}