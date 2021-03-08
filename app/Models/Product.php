<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'id',
        'title',
        'summary',
        'type',
        'price',
        'quantity',
        'content'

    ];
}