<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function genre(){
        // 1 genre bisa dimiliki banyak game
        return $this->hasMany(Game::class);
    }
}