<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bet extends Model
{
    protected $table = 'bets';

    public function event()
    {
        return $this->belongsTo('App\Event', 'event_id', 'id');
    }

    public function bookmaker()
    {
        return $this->belongsTo('App\Bookmaker', 'bookmaker_id', 'id');
    }

    public function sport()
    {
        return $this->belongsTo('App\Sport', 'sport_id', 'id');
    }
}
