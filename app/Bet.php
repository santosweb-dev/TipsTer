<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bet extends Model
{
    protected $table = 'bets';    

    public function betdetails()
    {
        return $this->hasMany('App\BetDetail');
    }

    public function bookmaker()
    {
        return $this->belongsTo('App\Bookmaker', 'bookmaker_id', 'id');
    }
}
