<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypePaiement extends Model
{
    use HasFactory;
    protected $fillable = ['type'];

    public function bonRecettes()
    {
        return $this->hasMany(BonRecette::class);
    }
    public function bonDeponses()
    {
        return $this->hasMany(BonDeponse::class);
    }
}
