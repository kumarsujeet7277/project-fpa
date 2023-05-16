<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    protected $table = 'countries';

    public function cities()
    {
        return $this->hasMany(City::class, 'country_id');
    }

    public function passengers()
    {
        return $this->hasMany(Passenger::class);
    }
}
