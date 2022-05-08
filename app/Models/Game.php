<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Game extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    public function genre(){
      // 1 game punya 1 genre
      return $this->belongsTo(Genre::class);
    }
}