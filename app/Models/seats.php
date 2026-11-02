<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class seats extends Model
{
    use HasFactory;
    protected $table = 'seat';
    public $timestamps = false;
    protected $fillable = [
        'row_num',
        'seat_num',
        'price_category',
        'hall_id',
    ];
    public function TICKETS(): HasMany
    {
        return $this->hasMany(tickets::class);
    }

    public function HALLS(): BelongsTo
    {
        return $this->belongsTo(halls::class, 'hall_id');
    }
}


