<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BonRecette extends Model
{
    use HasFactory;
    protected $fillable = ['montant', 'date', 'caisseur', 'designation', 'url', 'type_paiement_id'];

    public function typePaiement()
    {
        return $this->belongsTo(TypePaiement::class);
    }
    public function factureClients()
    {
        return $this->belongsToMany(FactureClient::class, 'facture_client_bon_recette', 'bon_recette_id', 'facture_client_id');
    }
    public function reservations()
    {
        return $this->belongsToMany(Reservation::class, 'bon_recette_reservation', 'bon_recette_id', 'reservation_id');
    }
}
