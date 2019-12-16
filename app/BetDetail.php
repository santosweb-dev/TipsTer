<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BetDetail extends Model
{
    protected $table = 'bets_details';
    
    public function event()
    {
        return $this->belongsTo('App\Event', 'event_id', 'id');
    }

    public function marketplace()
    {
        return $this->belongsTo('App\marketplace', 'marketplace_id', 'id');
    }
}
