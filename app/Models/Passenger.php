<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    use HasFactory;

    protected $table = 'passengers';

    protected $fillable = [
        'from_country',
        'from_city',
        'to_country',
        'to_city',
        'adults',
        'children',
        'price',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class, 'from_country');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'from_city');
    }
}
