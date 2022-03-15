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
        $song->user_id = 3;
        $song->category_id = 1;
        $song->save();

        $song = new Song();
        $song->title = "Canción numero 2";
        $song->video_url = "https://www.youtube.com/embed/EVLFwbyLX3A";
        $song->status = true;
        $song->user_id = 4;
        $song->category_id = 1;
        $song->save();

        $song = new Song();
        $song->title = "Canción numero 3";
        $song->video_url = "https://www.youtube.com/embed/g5JAOnrmjQg";
        $song->status = true;
        $song->user_id = 5;
        $song->category_id = 2;
        $song->save();

        $song = new Song();
        $song->title = "Canción numero 4";
        $song->video_url = "https://www.youtube.com/embed/5SodqEc8mAc";
        $song->status = true;
        $song->user_id = 6;
        $song->category_id = 2;
        $song->save();

        $song = new Song();
        $song->title = "Canción numero 5";
        $song->video_url = "https://www.youtube.com/embed/MqrScuLXoSo";
        $song->status = false;
        $song->user_id = 7;
        $song->category_id = 3;
        $song->save();

        $song = new Song();
        $song->title = "Canción numero 6";
        $song->video_url = "https://www.youtube.com/embed/a2DSskFgT5E";
        $song->status = true;
        $song->user_id = 8;
        $song->category_id = 3;
        $song->save();

        $song = new Song();
        $song->title = "Canción numero 7";
        $song->video_url = "https://www.youtube.com/embed/GZ9ic9QSO5U";
        $song->status = false;
        $song->user_id = 9;
        $song->category_id = 1;
        $song->save();

        $song = new Song();
        $song->title = "Canción numero 8";
        $song->video_url = "https://www.youtube.com/embed/y3MWfPDmVqo";
        $song->status = true;
        $song->user_id = 10;
        $song->category_id = 3;
        $song->save();

        $song = new Song();
        $song->title = "Canción numero 9";
        $song->video_url = "https://www.youtube.com/embed/y3MWfPDmVqo";
        $song->status = true;
        $song->user_id = 3;
        $song->category_id = 3;
        $song->save();

        $song = new Song();
        $song->title = "Canción numero 10";
        $song->video_url = "https://www.youtube.com/embed/LALUQNpm4zk";
        $song->status = true;
        $song->user_id = 3;
        $song->category_id = 1;
        $song->save();

        $song = new Song();
        $song->title = "Canción numero 11";
        $song->video_url = "https://www.youtube.com/embed/EVLFwbyLX3A";
        $song->status = true;
        $song->user_id = 4;
        $song->category_id = 1;
        $song->save();

        $song = new Song();
        $song->title = "Canción numero 12";
        $song->video_url = "https://www.youtube.com/embed/g5JAOnrmjQg";
        $song->status = true;
        $song->user_id = 5;
        $song->category_id = 2;
        $song->save();

        $song = new Song();
        $song->title = "Canción numero 13";
        $song->video_url = "https://www.youtube.com/embed/5SodqEc8mAc";
        $song->status = true;
        $song->user_id = 6;
        $song->category_id = 2;
        $song->save();

        $song = new Song();
        $song->title = "Canción numero 14";
        $song->video_url = "https://www.youtube.com/embed/MqrScuLXoSo";
        $song->status = false;
        $song->user_id = 7;
        $song->category_id = 3;
        $song->save();

        $song = new Song();
        $song->title = "Canción numero 15";
        $song->video_url = "https://www.youtube.com/embed/a2DSskFgT5E";
        $song->status = true;
        $song->user_id = 8;
        $song->category_id = 3;
        $song->save();

        $song = new Song();
        $song->title = "Canción numero 16";
        $song->video_url = "https://www.youtube.com/embed/GZ9ic9QSO5U";
        $song->status = false;
        $song->user_id = 9;
        $song->category_id = 1;
        $song->save();

        $song = new Song();
        $song->title = "Canción numero 17";
        $song->video_url = "https://www.youtube.com/embed/y3MWfPDmVqo";
        $song->status = true;
        $song->user_id = 10;
        $song->category_id = 3;
        $song->save();

        $song = new Song();
        $song->title = "Canción numero 18";
        $song->video_url = "https://www.youtube.com/embed/y3MWfPDmVqo";
        $song->status = true;
        $song->user_id = 3;
        $song->category_id = 3;
        $song->save();        
    }
}
