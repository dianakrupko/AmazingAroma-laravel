<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{

    public function getAllPhotos(){
        $photos=Photo::all();
        dd($photos);
    }
}
