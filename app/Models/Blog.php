<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
    ];


}
