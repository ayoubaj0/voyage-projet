<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accommodation extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'adresse', 'telephone', 'ville'];

    public function typeAccommodation()
    {
        return $this->belongsTo(TypeAccommodation::class);
    }

    public function classment()
    {
        return $this->belongsTo(Classment::class);
    }

    public function chambres()
    {
        return $this->hasMany(Chambre::class);
    }
}
