<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function game(){
        // 1 studio bisa dimiliki banyak game
        return $this->hasMany(Game::class);
    }
}
