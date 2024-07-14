<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSlider extends Model
{
    use HasFactory;
    protected $fillable = ['slider_text_top', 'slider_text_middle', 'slider_text_last', 'image', 'alt_tag', 'button_text', 'button_url', 'position', 'status'];
}
