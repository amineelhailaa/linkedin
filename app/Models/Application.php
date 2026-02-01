<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Application extends Model
{
    //
    protected $fillable = ['job_offer_id','status'];

    public function candidatProfile(): BelongsTo
    {
        return $this->belongsTo(CandidatProfile::class);
    }

    public function jobOffer(): BelongsTo
    {
        return $this->belongsTo(JobOffer::class);
    }
}
