<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guid extends Model
{
    use HasFactory;

    protected $table = 'guides';

    protected $guarded = false;




    public function tour()
    {
        return $this->belongsTo('App\Models\Tour\Tour', 'tour_id', 'id');
    }

    protected $fillable = [
        'image_guid',
        'name',
        'surname',
        'patronymic',
        'year_work',
        'guides_quality',
        'tour_id'
    ];
}
