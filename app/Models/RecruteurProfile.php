<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RecruteurProfile extends Model
{
    //
    protected $fillable = ['entreprise'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
