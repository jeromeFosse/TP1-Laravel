<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'adresse',
        'telephone',
        'courriel',
        'date_naissance',
        'ville_id',
    ];

    // Pour retourner le nom de la ville 
    public function ville()
    {
        return $this->belongsTo(Ville::class);
    }


}
