<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class prices extends Model
{
    use HasFactory;
    protected $table = 'price';
    public function SESSIONS(): BelongsTo
    {
        return $this->belongsTo(seSSion::class);
    }
}
