<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeAccommodation extends Model
{
    use HasFactory;
    protected $fillable = ['libelle'];

    public function accommodations()
    {
        return $this->hasOne(Accommodation::class);
    }
    
}
