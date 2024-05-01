<?php

namespace App\Models\Tour;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Tour extends Model
{
    use HasFactory;

    protected $table = 'tours';
    protected $guarded = false;

    public function program(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(TourProgram::class,'tours_tour_program_id_foreign');
    }
    public function categories(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Models\Category','category_id', 'id');
    }

    public function guid(){
        return $this->belongsTo('App\Models\Guid','id', 'tour_id');
    }


    protected $fillable = [
            'title',
            'price',
            'waiting_for_programs',
            'preview_image',
            'main_image',
            'duration_tour',
            'begin_tour',
            'category_id'
        ];




}
