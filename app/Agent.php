<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    //Agent can have many clients

    public function Clients(){
        return $this->hasMany(Client::class);
    }
    


}
