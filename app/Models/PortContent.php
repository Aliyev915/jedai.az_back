<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PortContent extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'lang',
        'title',
        'description',
        'project_name',
        'image',
        'image_mob',
        'url',
        'color_code',
        'sort',
        'slug',
        'status'
    ];

    public function getCategory()
    {
        return $this->belongsToMany('App\Models\PortCategory', 'port_cat_to_contents');
    }
}
