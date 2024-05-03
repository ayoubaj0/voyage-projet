<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Societe extends Model
{
    use HasFactory;
    protected $fillable = [
        'personne_id',
        'nom_fr',
        'nom_ar',
        'ice',
        'rib',
        'if',
        'raison_social',
    ];

    public function personne()
    {
        return $this->belongsTo(Personne::class);
    }
}
