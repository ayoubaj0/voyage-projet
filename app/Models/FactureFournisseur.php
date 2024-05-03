<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FactureFournisseur extends Model
{
    use HasFactory;
    protected $fillable = [
        'num_facture',
        'date_facture',
        'montant',
        'url',
    ];
    public function bonDeponses()
    {
        return $this->belongsToMany(BonDeponse::class, 'facture_client_bon_Deponse', 'facture_fournisseur_id', 'bon_Deponse_id');
    }
}
