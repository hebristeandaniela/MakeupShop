<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Cart extends Model
{
    use HasFactory;

    public $table = 'carts';

    protected $fillable = [
        'product_id',
        'quantity',
        'price',
        'user_id',
        'created_at',
        'updated_at',
    ];

    /**
     * Relationship with product.
     */
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    /**
     * Relationship with user.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
