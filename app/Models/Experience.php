<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Experience extends Model
{
    protected $fillable = ['entreprise','duree'];
    //
    public function candidatProfile(): BelongsTo
    {
        return $this->belongsTo(CandidatProfile::class);
    }
}
