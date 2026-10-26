<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class tickets extends Model
{
    use HasFactory;
    protected $table = 'ticket';
    public function SEATS(): BelongsTo
    {
        return $this->belongsTo(seats::class);
    }    
           
    public function SESSIONS(): BelongsTo
    {
        return $this->belongsTo(seSSion::class);
    }
}
