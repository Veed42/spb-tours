<?php

namespace App\Models\Tour;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourReview extends Model
{
    public function tour(){
        return $this->belongsTo('App\Models\Tour\Tour');
    }

    protected $table = 'tour_reviews';
    use HasFactory;

    protected $fillable = [
        'name',
        'content',
        'tour_id'
    ];
}
