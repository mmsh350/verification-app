<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = [
        'site_name',
        'short_name',
        'logo',
        'mini_logo',
        'favicon',
        'login_background_image',
        'registration_background_image',
    ];
}
