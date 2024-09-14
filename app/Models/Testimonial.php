<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    static public function getTestimonial()
    {
        return self::select('testimonials.*')
            ->where('testimonials.status', '=', 'Show')
            ->orderBy('testimonials.id', 'desc')
            ->paginate(20);

    }

    static public function getSingle($id)
    {

        return self::find($id);
    }
}