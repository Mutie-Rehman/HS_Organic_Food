<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewRating extends Model
{
    public function ReviewData()
    {
    return $this->hasMany('App\Models\ReviewRating','post_id');
    }
}