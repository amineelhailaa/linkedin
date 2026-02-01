<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Formation extends Model
{
    protected $fillable= [
        'diplome',
        'ecole',
        'year'
    ];
    //


    public function candidatProfile(): BelongsTo
    {
        return $this->belongsTo(CandidatProfile::class);
    }
}
