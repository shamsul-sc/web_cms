<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryType extends Model
{
    use HasFactory;

    static public function getGalleryType()
    {
        return self::select('gallery_types.*')
            ->where('gallery_types.type_status', '=', 'Show')
            ->orderBy('gallery_types.id', 'desc')
            ->paginate(10);
    }

    static public function getSingle($id)
    {

        return self::find($id);
    }
}