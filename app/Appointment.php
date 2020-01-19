<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model {
    protected $table = 'appointments';
    protected $guarded = [];
    public function user() {
        return $this->belongsTo(User::class);
    }
}