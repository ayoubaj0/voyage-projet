<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeChambre extends Model
{
    use HasFactory;
    protected $fillable = ['libelle', 'nbr_lit'];

    public function chambres()
    {
        return $this->hasMany(Chambre::class);
    }
}
