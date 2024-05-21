<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $primaryKey = 'id';

    protected $fillable = [
        'pcode',
        'name',
        'description',
        'price',
        'stock',
        'image',
         'status',
        
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'catid');
    }
}
