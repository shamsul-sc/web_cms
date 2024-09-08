<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryPhoto extends Model
{
    use HasFactory;

    static public function getGalleryPhoto()
    {
        return self::select('gallery_photos.*')
            ->where('gallery_photos.status', '=', 'Show')
            ->orderBy('gallery_photos.id', 'desc')
            ->get();
    }

    static public function getSingle($id)
    {

        return self::find($id);
    }
}