<?php

namespace Database\Seeders;

use App\Models\Playlist;
use Illuminate\Database\Seeder;

class PlaylistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $playlist = new Playlist();
        $playlist->name = "Top 1";
        $playlist->status = true;
        $playlist->order = 2;        
        $playlist->save();

        $playlist->songs()->sync([1,3,5,7,10,12,13]);

        $playlist = new Playlist();
        $playlist->name = "Top 2";
        $playlist->status = true;
        $playlist->order = 3;
        $playlist->save();

        $playlist->songs()->sync([2,3,4,7,8,10,13]);

        $playlist = new Playlist();
        $playlist->name = "Top 3";
        $playlist->status = false;
        $playlist->order = 4;
        $playlist->save();

        $playlist->songs()->sync([12,13,14,15,16,17,18]);

        $playlist = new Playlist();
        $playlist->name = "Top 4";
        $playlist->status = true;
        $playlist->order = 1;
        $playlist->save();

        $playlist->songs()->sync([4,12,13,14,15,16,17,18]);
    }
}
