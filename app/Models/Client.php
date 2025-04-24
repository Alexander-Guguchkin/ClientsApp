<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Status;

class Client extends Model
{
    protected $fillable = [
        'username',
        'contact'
    ];

    public function status()  {
        return $this->belongsTo(Status::class);
    }
}
