<?php

namespace App\Models;

use App\Models\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Dashboard extends Model
{
    public function client(): HasOne
    {
        return $this->hasOne(Client::class);
    }
}
