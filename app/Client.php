<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //Clients are assigned to a single agent
    public function Agent(){

        return $this->belongsTo(Agent::class);
    }
}
