<?php

namespace App\Models\Tour;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $table = 'tours';
    protected $guarded = false;

    public function program(){
        return $this->hasOne(TourProgram::class,'tours_tour_program_id_foreign');
    }
    public function category(){
        return $this->hasOne(Category::class,'tours_category_id_foreign');
    }

    protected $fillable = [
            'title',
            'price',
            'waiting_for_programs',
            'preview_image',
            'main_image',
            'duration_tour',
            'begin_tour',
        ];




}
