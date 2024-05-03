<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrestationFournisseur extends Model
{
    use HasFactory;
    protected $fillable = ['personne_id', 'vol_id', 'chambre_id', 'visa_id', 'autre_service_id', 'total_prestation', 'rest_prestation', 'etat'];

    public function personne()
    {
        return $this->belongsTo(Personne::class);
    }
    public function vol()
    {
        return $this->belongsTo(Vol::class);
    }
    public function chambre()
    {
        return $this->belongsTo(Chambre::class);
    }
    public function visa()
    {
        return $this->belongsTo(VISA::class);
    }
    public function autreService()
    {
        return $this->belongsTo(AutreService::class);
    }
    public function bonDeponses()
    {
        return $this->belongsToMany(BonDeponse::class, 'bon_recette_reservation', 'reservation_id', 'bon_recette_id');
    }

}
