<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'lang',
        'title',
        'sort',
        'slug',
        'status'
    ];
    
    public function getContent()
    {
        return $this->belongsToMany('App\Models\PortContent', 'port_cat_to_contents');
    }
}
