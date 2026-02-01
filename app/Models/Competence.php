<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Competence extends Model
{
    protected $fillable = ['titre'];
    //
    public function candidatProfile(): BelongsTo
    {
        return $this->belongsTo(CandidatProfile::class);
    }
}
