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

    public function prestationFournisseur()
    {
        return $this->belongsToMany(PrestationFournisseur::class, 'bon_deponse_prestation_fournisseur', 'bon_deponse_id', 'prestation_fournisseur_id');
    }
    public function factureFournisseurs()
    {
        return $this->belongsToMany(FactureFournisseur::class, 'facture_fournisseur_bon_deponse', 'bon_deponse_id', 'facture_Fournisseur_id');
    }
}
