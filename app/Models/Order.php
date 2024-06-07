<?php

namespace App\Models;

use App\Models\Tour\Tour;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';

    protected $guarded = false;

    protected $casts = [
      'date_tour' => 'datetime',
        'time_tour' => 'datetime',
    ];


    public function user()
    {
        return $this->hasOne(User::class);
    }
    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }

    protected $fillable = [
        'name',
        'phone',
        'email',
        'country',
        'time_tour',
        'date_tour',
        'count_grown',
        'count_children',
        'age_children',
        'status',
        'user_id',
        'tour_id'
    ];

}
