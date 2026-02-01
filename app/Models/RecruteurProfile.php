<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RecruteurProfile extends Model
{
    //
    protected $fillable = ['entreprise'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function jobOffer(): HasMany
    {
        return $this->hasMany(JobOffer::class);
    }

}
