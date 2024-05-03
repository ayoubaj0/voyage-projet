<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FactureClient extends Model
{
    use HasFactory;
    protected $fillable = [
        'ice',
        'date_facture',
        'designation',
        'adresse',
    ];
    public function bonRecettes()
    {
        return $this->belongsToMany(BonRecette::class, 'facture_client_bon_recette', 'facture_client_id', 'bon_recette_id');
    }
}
