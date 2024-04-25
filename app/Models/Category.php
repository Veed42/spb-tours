<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function tour():BelongsTo
    {
        return $this->belongsTo('App\Models\Tour', 'id', 'category_id');
    }
    protected $fillable = [
        'title',
    ];
}
