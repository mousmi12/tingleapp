<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catmap extends Model
{
    use HasFactory;
    protected $table = 'catmap';
    protected $primaryKey = 'id';

    protected $fillable = [
        'catid',
        'pid',
        
        
    ];
}
