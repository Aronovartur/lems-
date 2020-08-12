<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matter extends Model
{
    //matters belong to clients

    public function Client(){
        return $this->belongsTo(Client::class);
    }
}
