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

    protected $guarded = [];

    protected $casts = [
      'date_tour' => 'date:y-m-d',
        'time_tour' => 'datetime',
    ];


    public function user()
    {
        return $this->belongsTo('App\Models\Order', 'user_id', 'id');
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
        'date_tour',
        'status',
        'user_id',
        'tour_id'
    ];

    public const STATUSES = [
        0 => 'В обработке',
        1 => 'Подтверждено',
        2 => 'Отклонено'
    ];

}
