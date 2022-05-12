<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function game(){
        // 1 platform bisa dimiliki banyak game
        return $this->hasMany(Game::class);
    }
}
