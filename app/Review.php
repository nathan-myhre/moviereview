<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'review';
    protected $fillable = [
        'imdb_id',
        'user_id',
        'content'
    ];
    public function votes()
    {
        return $this->hasMany('App\ReviewVote', 'review_id');
    }
}
