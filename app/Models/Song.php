<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'video_url', 'user_id', 'status'];

    // One-to-many relationship (inverse)
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    // One-to-many relationship (inverse)
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    // Many-to-many relationship
    public function playlists(){
        return $this->belongsToMany('App\Models\Playlist')->withTimestamps();
    }
}
