<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class site_setting extends Model
{
    protected $table = 'site_settings';
    protected $primaryKey = 'id';
    protected $fillable = ['website_name', 'logo', 'description', 'keywords',"additional_head_content"];
    use HasFactory;
}

