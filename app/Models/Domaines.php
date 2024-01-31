<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Schema;

class Domaines extends Model
{
    protected $fillable = [
        'nom',
        'description'
];
    use HasFactory;

    /**
     * @return HasMany
     */
    public function sujet_formations()
    {
        return $this->hasMany(Sujet_formation::class);
    }
}
