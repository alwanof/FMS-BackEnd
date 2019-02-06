<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function subscriptions()
    {
        return $this->hasMany('App\Subscriptions');
    }
}
