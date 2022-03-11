<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'biography', 'website', 'phone', 'user_id'];

    // One to one relationship
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
