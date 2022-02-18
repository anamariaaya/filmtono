<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Song;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $song = new Song();
        $song->title = "Canción numero 1";
        $song->video_url = "https://www.youtube.com/embed/LALUQNpm4zk";
        $song->status = true;
        $song->save();

        $song = new Song();
        $song->title = "Canción numero 2";
        $song->video_url = "https://www.youtube.com/embed/EVLFwbyLX3A";
        $song->status = true;
        $song->save();

        $song = new Song();
        $song->title = "Canción numero 3";
        $song->video_url = "https://www.youtube.com/embed/g5JAOnrmjQg";
        $song->status = true;
        $song->save();

        $song = new Song();
        $song->title = "Canción numero 4";
        $song->video_url = "https://www.youtube.com/embed/5SodqEc8mAc";
        $song->status = true;
        $song->save();

        $song = new Song();
        $song->title = "Canción numero 5";
        $song->video_url = "https://www.youtube.com/embed/MqrScuLXoSo";
        $song->status = false;
        $song->save();

        $song = new Song();
        $song->title = "Canción numero 6";
        $song->video_url = "https://www.youtube.com/embed/a2DSskFgT5E";
        $song->status = true;
        $song->save();

        $song = new Song();
        $song->title = "Canción numero 7";
        $song->video_url = "https://www.youtube.com/embed/GZ9ic9QSO5U";
        $song->status = false;
        $song->save();

        $song = new Song();
        $song->title = "Canción numero 8";
        $song->video_url = "https://www.youtube.com/embed/y3MWfPDmVqo";
        $song->status = true;
        $song->save();
    }
}
