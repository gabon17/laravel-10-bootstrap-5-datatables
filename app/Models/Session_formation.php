<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session_formation extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'description',
        'date_deb',
        'date_fin',
        'nb_participants',
        'presentiel',
        'type'
    ];
    public function sujet_formations()
    {
        return $this->belongsTo(Sujet_formation::class);
    }
    public function etab_formation()
    {
        return $this->belongsTo(Etab_formation::class);
    }
}
