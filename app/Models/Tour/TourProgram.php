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
        return $this->hasMany(TourProgram::class);
    }



    protected $fillable = [
        'title',
        'description',
        'begin_tour_banner',
        'back_image',
        'tour_id'
    ];
}
