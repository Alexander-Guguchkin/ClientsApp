<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function client() {
        return $this->hasMany(Client::class);
    }
}
