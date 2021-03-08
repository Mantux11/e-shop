<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'id',
        'user_id',
        'products_id',
        'created_at',
        'updated_at'
    ];
}