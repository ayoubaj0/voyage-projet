<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vol extends Model
{
    use HasFactory;
    protected $fillable = ['date_aller', 'date_aller', 'nbr_sg_eco', 'nbr_sg_luxe', 'montant_eco', 'montant_luxe', 'montant_chld', 'montant_inf', 'nbr_sg_eco_r', 'nbr_sg_luxe_r'];

    public function compagnie()
    {
        return $this->belongsTo(Compagnie::class);
    }
    public function prestations()
    {
        return $this->hasMany(Prestation::class);
    }
    public function prestationFournisseurs()
    {
        return $this->hasMany(PrestationFournisseur::class);
    }
}
