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

    public function program()
    {
        return $this->hasOne(TourProgram::class);
    }



    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }
    public function categories(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Models\Category','category_id', 'id');
    }

    public function guides(){
        return $this->hasMany('App\Models\Guid','id', 'guid_id');
    }
    public function guid()
    {
        return $this->belongsTo('App\Models\Guid', 'guid_id', 'id');
    }
    public function reviews()
    {
     return $this->hasMany('App\Models\Tour\TourReview');
    }





    protected $fillable = [
            'title',
            'price',
            'waiting_for_programs',
            'preview_image',
            'main_image',
            'duration_tour',
            'begin_tour',
            'category_id',
            'tour_program_id',
            'guid_id'
        ];




}
