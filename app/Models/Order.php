<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;


    public function orders():HasMany
    {
        return $this->hasMany(User::class,'user_id');
    }

    protected $fillable = [
        'name',
        'phone',
        'email',
        'country',
        'time',
        'count_grown',
        'count_children',
        'age_children',
        'title_tour',
        'price_tour',
        'status'
    ];

}
