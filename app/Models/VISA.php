<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VISA extends Model
{
    use HasFactory;
    protected $fillable = ['saison', 'prix', 'visa_type'];

    public function prestations()
    {
        return $this->belongsToMany(Prestation::class);
    }

    public function prestationFournisseurs()
    {
        return $this->hasMany(PrestationFournisseur::class);
    }
}
