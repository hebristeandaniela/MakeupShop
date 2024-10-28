<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'tblcategory';

    protected $fillable = [
        'CATEGID',
        'CATEGORIES',
        'USERID',
        'delete_flag',
    ];
    public function products()
    {
        return $this->hasMany(Product::class, 'CATEGID', 'CATEGID');
    }
}
