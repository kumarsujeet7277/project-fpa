<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
        'project_name',
        'due_date'
    ];

    

    // public function setDueDateAttribute($value)
    // {
    //     // dd($value);
    //     $this->attributes['due_date'] = Carbon::createFromFormat('d/m/y', $value)->format('y-m-d');
    // }
}
