<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;

class Anime extends Model
{
    public static function addAnime()
    {
        $pathToAttach = '/src/animeImage/';
        $file = request()->file('image');

        $randName = str_random(20);

        $filename = $randName . '.' . $file->getClientOriginalExtension() ?: 'png';
        $filenameOrigin = $randName . 'Origin' . '.' . $file->getClientOriginalExtension() ?: 'png';

        $file->move(public_path() . $pathToAttach, $filename);
        copy(public_path() . $pathToAttach . $filename, public_path() . $pathToAttach . $filenameOrigin );
        $img = Image::make(public_path() . $pathToAttach . $filename);

        $img->resize(240, 320);
        $img->save();

        $anime = new Anime;
        $anime->title = request()->title;
        $anime->english_title = request()->english_title;
        $anime->synonyms = request()->synonyms;
        $anime->episodes = request()->episodes;
        $anime->type = request()->type;
        $anime->status = request()->status;
        $anime->start_date = request()->start_date;
        $anime->end_date = request()->end_date;
        $anime->synopsis = request()->synopsis;
        $anime->image = '/src/animeImage/' . $filename;

        $anime->save();
    }
}
