<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productnw extends Model
{
    use HasFactory;

    protected $table = 'productnws';

    protected $fillable = [
        'product_name',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
