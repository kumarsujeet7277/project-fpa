<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodect extends Model
{
    use HasFactory;

    protected $table = 'prodects';

    protected $fillable = [
        'product_name',
        'tags',
    ];
}
