<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'status'];

    // One to many relationship
    public function songs(){
        return $this->hasMany('App\Models\Song');
    }
}
