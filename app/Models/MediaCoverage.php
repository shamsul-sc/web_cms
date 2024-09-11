<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaCoverage extends Model
{
    use HasFactory;

    public static function getMedia()
    {
        return self::select('media_coverages.*')
            ->where('media_coverages.status', 'Show')
            ->where('media_coverages.full_news_image', 'Show')
            ->orderBy('media_coverages.id', 'desc')
            ->paginate(20);
    }

    static public function getSingle($id)
    {

        return self::find($id);
    }
}