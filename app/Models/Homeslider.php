<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homeslider extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'subtitle', 'status'];

    // Polymorphic one-to-one relationship
    public function image(){
        return $this->morphOne('App\Models\Image', 'imageable');
    }
}
