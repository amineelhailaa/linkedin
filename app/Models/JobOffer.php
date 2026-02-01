<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobOffer extends Model
{
    protected $fillable = [
        'entreprise',
        'contrat',
        'titre',
        'description',
        'image',
        'status'
    ];

    public function recruteurProfile(): BelongsTo
    {
        return $this->belongsTo(RecruteurProfile::class);
    }
    //
}
