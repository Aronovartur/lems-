<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    //All documents belong to a specific matter

    public function Matter(){
        return $this->belongsTo(Matter::class);

    }

}
