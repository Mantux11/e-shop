<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discounts extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'id',
        'products_id',
        'percentage',
        'from',
        'to'
    ];

    public function product(){
        return $this->belongsTo(Product::class, 'products_id');
    }
}
