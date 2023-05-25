<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryTournament extends Model
{
    use HasFactory;

    protected $table = 'country_tournaments';

    protected $fillable = [
        'country_id',
        'tournamant_id',
        'position',
    ];

    public function countries()
    {
        return $this->belongsToMany(Country::class);
    }

    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }
}
