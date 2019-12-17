<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'accounts';

    public function bookmaker()
    {
        return $this->belongsTo('App\Bookmaker', 'bookmaker_id', 'id');
    }
}
