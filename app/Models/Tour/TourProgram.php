<?php

namespace App\Models\Tour;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TourProgram extends Model
{
    use HasFactory;

    protected $table = 'tour_programs';
    protected $guarded = false;

    public function tour()
    {
        return $this->belongsTo('App\Models\Tour\Tour', 'tour_id', 'id');
    }

    public function tours(){
        return $this->hasOne('App\Models\Tour\Tour', 'tour_program_id', 'tour_id');
    }

    protected $fillable = [
        'title',
        'description',
        'begin_tour_banner',
        'back_image',
        'tour_id'
    ];
}
