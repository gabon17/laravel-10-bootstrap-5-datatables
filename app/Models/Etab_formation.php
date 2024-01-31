<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etab_formation extends Model
{
    use HasFactory;
    protected $fillable = [
       'nom',
    'description',
    'mail',
    'adresse',
    'telephone',
    ];
    public function session_formation()
    {
        return $this->hasMany(Session_formation::class);
    }
}
