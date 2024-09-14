<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\GalleryType;
use App\Models\GalleryAlbum;
use Illuminate\Http\Request;

class WebAlbumsController extends Controller
{
    public function albums()
    {
        
        $data['galleryTypes'] = GalleryType::where('type_status', 'Show')->orderBy('type_serial')->get();
        $data['albums'] = GalleryAlbum::join('gallery_types', 'gallery_types.id', '=', 'gallery_albums.type_id')->where('album_status', 'Show')->orderBy('album_serial')->get();
        // dd($data['albums']); exit;
        return view('pages.albums', $data);
    }
}
