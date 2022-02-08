<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homeslider;

class HomeController extends Controller
{
    public function __invoke()
    {
        $homesliders = Homeslider::where('status', true)->get();

        return view('welcome', compact('homesliders'));
    }
}
