<?php

// app/Models/Formation.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class Sujet_formation extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'description',
    ];
    //relation avec formateur via porteuse formateur_sujet_formation
    public function formateurs()
    {
        return $this->belongsToMany(Formateurs::class, 'formateur_sujet_formation', 'sujet_formation_id', 'formateur_id');
    }

    // Vous pouvez ajouter des relations ici si nécessaire

    public function domaine()
    {
        return $this->belongsTo(Domaines::class);
    }
    public function session_formation()
    {
        return $this->hasMany(Session_formation::class);
    }
}
