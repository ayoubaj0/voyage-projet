<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'personne_id',
        'prestation_id',
        'montant',
        'date_reservation',
        'etat',
        'remise',
    ];
    public function bonRecettes()
    {
        return $this->belongsToMany(BonRecette::class, 'bon_recette_reservation', 'reservation_id', 'bon_recette_id');
    }
    public function prestation()
    {
        return $this->belongsTo(Prestation::class);
    }
    public function personne()
    {
        return $this->belongsTo(Personne::class);
    }
}
