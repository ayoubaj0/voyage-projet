<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestation extends Model
{
    use HasFactory;
    protected $fillable = ['montant_total', 'faux_frais', 'commission', 'vol_id'];

    public function vol()
    {
        return $this->belongsTo(Vol::class);
    }
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
    public function autresServices()
    {
        return $this->belongsToMany(AutreService::class);
    }
    public function chambres()
    {
        return $this->belongsToMany(Chambre::class);
    }
    public function visas()
    {
        return $this->belongsToMany(VISA::class);
    }


}
