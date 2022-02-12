<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homeslider;
use App\Models\Image;

class HomeController extends Controller
{
    public function __invoke()
    {
        $homesliders = Homeslider::where('status', true)
                        ->join('Images', 'Homesliders.id', '=', 'Images.imageable_id')
                        ->get();

        return view('welcome', compact('homesliders'));
    }
}
