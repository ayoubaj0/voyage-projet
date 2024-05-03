<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docs extends Model
{
    use HasFactory;
    protected $fillable = [
        'personne_id',
        'type',
        'url',
    ];

    public function personne()
    {
        return $this->belongsTo(Personne::class);
    }
}
