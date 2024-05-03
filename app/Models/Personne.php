<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;
    protected $fillable = [
        'commission',
        'adresse',
        'ville',
        'tel_1',
        'tel_2',
        'commercial',
        'client',
        'prestataire',
    ];
    public function societe()
    {
        return $this->hasOne(Societe::class);
    }

    public function individu()
    {
        return $this->hasOne(Individu::class);
    }

    public function docs()
    {
        return $this->hasMany(Docs::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
    
    public function prestationFournisseurs()
    {
        return $this->hasMany(PrestationFournisseur::class);
    }
}
