<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'status', 'order'];

    // Many-to-many relationship
    public function songs(){
        return $this->belongsToMany('App\Models\Song')->withTimestamps();
    }
}
