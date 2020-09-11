<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function index($id)
    {
        $images = Image::where('gallerie_id', $id)->get();
        return view ('site.image.images', compact('images'));
    }
}
