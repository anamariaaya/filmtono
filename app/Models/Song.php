<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'video_url', 'user_id', 'status'];

    // Relacion uno a muchos (inversa)
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
