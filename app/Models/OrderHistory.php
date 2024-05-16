<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderHistory extends Model
{
    use HasFactory;
    protected $table = 'orderhistory';
    protected $primaryKey = 'id';

    protected $fillable = [
        'customername',
        'mobile',
        'pid',
        'date',
         'qty',
         'price',
         'totalprice',
         'description',
        'status',
    ];
}
