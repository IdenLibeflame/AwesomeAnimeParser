<?php

namespace App\Http\Controllers;

use App\Anime;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    public function index()
    {
        $animes = Anime::paginate(1);

        return view('admin.index', compact('animes'));
    }

    public function showAnimeForm()
    {
        return view('admin.addAnime');
    }

    public function addAnime()
    {
        $pathToAttach = '/public/src/animeImage/';
        $file = request()->file('image');
        $filename = str_random(20) . '.' . $file->getClientOriginalExtension() ?: 'png';
        $file->move(public_path() . $pathToAttach, $filename);
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
        $anime->image = '/public/src/animeImage/' . $filename;

        $anime->save();
        return redirect()->to('admin/index');
    }
}
