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

    public function tour():BelongsTo
    {
        return $this->belongsTo('App\Models\Tour', 'id', 'category_id');
    }

    protected $fillable = [
        'title',
        'description_program_tour',
        'back_image',
        'days',
        'tour_id'
    ];

}
