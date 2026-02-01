<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CandidatProfile extends Model
{
    //
protected $fillable = [
    'specialite',
    'profile_title'];
public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
{
    return $this->belongsTo(User::class);
}
public function experience(){
    return $this->hasMany(Experience::class);
}

public function formation()
{
    return $this->hasMany(Formation::class);
}

public function competence()
{
    return $this->hasMany(Competence::class);
}

    public function applications(): HasMany
    {
        return $this->hasMany(Application::class);
    }
}
