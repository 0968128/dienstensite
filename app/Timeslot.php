<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timeslot extends Model {
    protected $table = 'timeslots';
    public function user() {
        return $this->belongsTo(User::class);
    }
}
