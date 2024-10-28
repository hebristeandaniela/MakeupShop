<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'image_name',
        'price',
        'sale_price',
        'created_at',
        'updated_at',
        'CATEGID',
        'delete_flag',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'CATEGID', 'CATEGID');
    }
    public function inventory()
    {
        return $this->hasMany(Inventory::class);
    }
}
