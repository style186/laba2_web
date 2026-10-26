<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Halls extends Model
{
    use HasFactory;
    protected $table = 'hall';
    public function SEATS(): HasMany
    {
        return $this->hasMany(seats::class);
    }

    public function SESSIONS(): HasMany
    {
        return $this->hasMany(seSSion::class, 'hall_id');
    }
}
