<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formateurs extends Model
{
    protected $fillable = [
        'nom',
        'mail',
        'prenom',
        'type',
        'tel',
    ];

    use HasFactory;
    public function sujetFormations()
    {
        return $this->belongsToMany(Sujet_formation::class, 'formateur_sujet_formation', 'formateur_id', 'sujet_formation_id');
    }
}
