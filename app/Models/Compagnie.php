<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compagnie extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'ice', 'adresse', 'telephone', 'if'];

    public function vols()
    {
        return $this->hasMany(Vol::class);
    }
}
