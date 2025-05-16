<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    public function apprentices()
    {
        return $this-> hasMany(Apprentice::class);
    }
}
