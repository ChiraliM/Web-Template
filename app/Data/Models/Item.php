<?php

namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;

    protected $table = "items";

    protected $fillable = [
        'name',
        'slug',
        'title',
        'category',
        'description',
        'cost',
        'price',
        'is_featured',
    ];


    protected $cast = [
        'name' => 'string',
        'slug'  => 'string',
        'title' =>'string',
        'category' =>'string',
        'description' => 'string',
        'is_featured' => 'boolean',
        'cost' => 'float',
        'price' => 'float'
    ];
}
