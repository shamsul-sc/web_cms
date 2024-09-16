<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryAlbum extends Model
{
    use HasFactory;

    static public function getGalleryAlbum()
    {
        return self::select('gallery_albums.*')
            ->where('gallery_albums.album_status', '=', 'Show')
            ->orderBy('gallery_albums.id', 'desc')
            ->paginate(10);
    }

    static public function getSingle($id)
    {

        return self::find($id);
    }
}