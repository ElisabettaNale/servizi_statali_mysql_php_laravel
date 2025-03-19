<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


// The PrestazioneErogata class specifies the associated table name as 
// 'prestazioni_erogate' and defines data_vendita, tipologia_id, and 
// quantita as attributes. It includes a tipologia() method, which establishes 
// a relationship between PrestazioneErogata and PrestazioneOfferta, 
// indicating that a PrestazioneErogata instance belongs to a PrestazioneOfferta 
// through the tipologia_id foreign key.
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