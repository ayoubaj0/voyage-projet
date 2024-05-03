<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutreService extends Model
{
    use HasFactory;
    protected $fillable = ['designation', 'date', 'montant'];

    public function prestations()
    {
        return $this->belongsToMany(Prestation::class);
    }

    public function prestationFournisseurs()
    {
        return $this->hasMany(PrestationFournisseur::class);
    }
}
