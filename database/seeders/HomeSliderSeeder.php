<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Homeslider;

class HomeSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $homeslider = new Homeslider();
        $homeslider->title = "Titulo Slider 1";
        $homeslider->subtitle = "Subtitulo del slider No 1";
        $homeslider->status = true;
        $homeslider->save();

        $homeslider = new Homeslider();
        $homeslider->title = "Titulo Slider 2";
        $homeslider->subtitle = "Subtitulo del slider No 2";
        $homeslider->status = true;
        $homeslider->save();

        $homeslider = new Homeslider();
        $homeslider->title = "Titulo Slider 3";
        $homeslider->subtitle = "Subtitulo del slider No 3";
        $homeslider->status = true;
        $homeslider->save();

        $homeslider = new Homeslider();
        $homeslider->title = "Titulo Slider 4";
        $homeslider->subtitle = "Subtitulo del slider No 4";
        $homeslider->status = false;
        $homeslider->save();
    }
}
