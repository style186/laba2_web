<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class seSSion extends Model
{
    use HasFactory;
    protected $table = 'seSSions';
    public function TICKETS(): HasMany
    {
        return $this->hasMany(tickets::class);
    }
    
    public function PRICES(): HasMany
    {
        return $this->hasMany(prices::class);
    }

    public function HALLS(): BelongsTo
    {
        return $this->belongsTo(halls::class, 'hall_id');
    }   

    public function MOVIES(): BelongsTo
    {
        return $this->belongsTo(movies::class);
    }   
}
