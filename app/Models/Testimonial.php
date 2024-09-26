<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = ['content'];

    static public function getTestimonial()
    {
        return self::select('testimonials.*')
            ->where('testimonials.status', '=', 'Show')
            ->orderBy('testimonials.id', 'desc')
            ->paginate(10);

    }

    static public function getSingle($id)
    {

        return self::find($id);
    }
}