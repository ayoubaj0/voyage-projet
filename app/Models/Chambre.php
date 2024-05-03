<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    use HasFactory;
    protected $fillable = ['accommodation_id', 'type_id', 'num_chambre', 'check_in', 'check_out', 'saison', 'prix', 'devis', 'taux'];

    public function accommodation()
    {
        return $this->belongsTo(Accommodation::class);
    }
    public function typeChambre()
    {
        return $this->belongsTo(TypeChambre::class);
    }
    public function prestations()
    {
        return $this->belongsToMany(Prestation::class);
    }
    public function prestationFournisseurs()
    {
        return $this->hasMany(PrestationFournisseur::class);
    }
    
}
