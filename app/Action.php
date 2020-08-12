<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    //is an event that has a due date, an outcome and belongs to the matter


    public function Case(){

        return $this->belongsTo(Matter::class);

    }
}
