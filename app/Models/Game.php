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

    public function studio(){
      // 1 game punya 1 studio
      return $this->belongsTo(Studio::class);
    }

    public function platform(){
      // 1 game punya 1 platform
      return $this->belongsTo(Platform::class);
    }
}
