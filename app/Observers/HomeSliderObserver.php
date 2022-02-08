<?php

namespace App\Observers;

use App\Models\Homeslider;
use Illuminate\Support\Facades\Storage;

class HomeSliderObserver
{
    public function created(Homeslider $homeslider)
    {
        //
    }

    public function deleting(Homeslider $homeslider)
    {
        if ($homeslider->image) {
            Storage::delete($homeslider->image->url);
        }
    }

}
