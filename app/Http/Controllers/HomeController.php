<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Homeslider;
use App\Models\Image;
use App\Models\Playlist;
use App\Models\Song;


class HomeController extends Controller
{
    public function __invoke()
    {
        $homesliders = Homeslider::where('status', true)
            ->join('Images', 'Homesliders.id', '=', 'Images.imageable_id')
            ->get();
       
        // $playlists = Playlist::select('id','name')
        //     ->with('Songs:id,title,video_url,status')
        //     ->where('Playlists.status', true)
        //     ->orderBy('Playlists.order')
        //     ->get();

        // $playlists = Playlist::with('Songs')
        //     ->where('status', true)
        //     ->whereHas('Songs', function(Builder $query) {
        //         $query->where('status', 1);
        //     })
        //     ->get();

        $playlists = Playlist::with('Songs')
            ->where('Playlists.status', true)
            ->orderBy('Playlists.order')
            ->get();

        return view('welcome', compact('homesliders', 'playlists'));
    }
}
