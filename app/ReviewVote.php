<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReviewVote extends Model
{
  protected $table = 'reviewvote';
    protected $fillable = [
        'review_id',
        'user_id',
        'value'
    ];
    public function users()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
    public function reviews()
    {
        return $this->hasOne('App\Review', 'id', 'review_id');
    }
}
