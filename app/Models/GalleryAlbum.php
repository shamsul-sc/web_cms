<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryAlbum extends Model
{
    use HasFactory;

    static public function getGalleryAlbum()
    {
        return self::select('gallery_albums.*','gallery_types.type_name as type_name')
            ->join('gallery_types', 'gallery_types.id', '=', 'gallery_albums.type_id')
            ->where('gallery_albums.album_status', '=', 'Show')
            ->orderBy('gallery_albums.id', direction: 'desc')
            ->paginate(10);
    }

    static public function getSingle($id)
    {

        return self::find($id);
    }
}