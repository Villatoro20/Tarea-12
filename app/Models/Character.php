<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'movie_or_series_id', 'picture', 'description'];

    public function movieOrSeries()
    {
        return $this->belongsTo(MovieOrSeries::class);
    }
}
