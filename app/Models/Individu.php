<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Individu extends Model
{
    use HasFactory;
    protected $fillable = [
        'personne_id',
        'nom_fr',
        'prenom_fr',
        'nom_ar',
        'prenom_ar',
        'num_pass',
        'cin',
        'sexe',
        'date_naiss',
        'date_delivrance',
        'date_expiration',
        'affiliation',
    ];

    public function personne()
    {
        return $this->belongsTo(Personne::class);
    }
}
