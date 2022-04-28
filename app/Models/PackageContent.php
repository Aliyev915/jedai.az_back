<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageContent extends Model
{
    use HasFactory;

    protected  $fillable = [
        'lang',
        'cat_id',
        'title',
        'day',
        'price',
        'discount',
        'sort',
        'status'
    ];

    public function getCategory()
    {
        return $this->hasOne('App\Models\PackageCategory', 'id', 'cat_id');
    }
}
