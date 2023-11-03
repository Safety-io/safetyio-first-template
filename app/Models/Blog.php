<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static create(array $array)
 */
class Blog extends Model
{
    use HasFactory;


    protected $fillable = [
        'title' ,
        'image' ,
        'content',
        'auteur',
        'picture',
        'grade',
        'read_time',
        'category',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(
            Category::class,

        );
    }
}
