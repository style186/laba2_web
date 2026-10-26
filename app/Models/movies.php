<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class movies extends Model
{
    protected $table = 'movie';
    public function SESSIONS(): HasMany
    {
        return $this->hasMany(seSSion::class);
    }
}
