<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homeslider extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'subtitle', 'status'];

    // Relacion polimorfica
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
