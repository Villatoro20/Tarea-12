<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieOrSeries extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'classification', 'release_date', 'review', 'season'];

    public function characters()
    {
        return $this->hasMany(Character::class);
    }
}
