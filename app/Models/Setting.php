<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'site_title',
        'site_description',
        'about_img',
        'about_title',
        'about_description',
        'address',
        'tel',
        'tel2',
        'email',
        'facebook',
        'instagram',
        'linkedin',
        'favicon',
        'logo',
        'robots_txt'
    ];

    public $timestamps = false;
}
