<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'user_id',
        'title',
        'description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
    public function votes()
    {
        return $this->hasOne(Vote::class);
    } 

    public function userVotes(): HasOne 
    {
        return $this->votes()->one()->where('user_id', auth()->id());
    } 



    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }

    public function AllCommentsCount()
    {
        return $this->hasMany(Comment::class)->count();
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

   
}
