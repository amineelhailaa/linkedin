<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JobOffer extends Model
{
    use HasFactory;
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

    public function applications(): HasMany
    {
        return $this->hasMany(Application::class);
    }
    //
}
