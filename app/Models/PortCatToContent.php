<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortCatToContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'cat_id',
        'content_id'
    ];

    public $timestamps = false; 
}
