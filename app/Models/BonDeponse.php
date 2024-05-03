<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BonDeponse extends Model
{
    use HasFactory;
    protected $fillable = ['montant', 'date', 'designation', 'url', 'paye_par', 'type_paiement_id'];

    public function typePaiement()
    {
        return $this->belongsTo(TypePaiement::class);
    }
    // public function factureClients()
    // {
    //     return $this->belongsToMany(FactureClient::class, 'facture_client_bon_recette', 'bon_recette_id', 'facture_client_id');
    // }
    public function prestationFournisseur()
    {
        return $this->belongsToMany(PrestationFournisseur::class, 'bon_deponse_prestation_fournisseur', 'bon_deponse_id', 'prestation_fournisseur_id');
    }
}
