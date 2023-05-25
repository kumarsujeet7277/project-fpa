<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;

    protected $table = 'tournaments';
    
    protected $fillable = [
        'name'
    ];

    public function countries()
    {
        return $this->belongsToMany(Country::class, 'country_tournaments')->withPivot(['position']);
    }

    public function country_tournaments()
    {
        return $this->hasMany(CountryTournament::class);
    }
}
