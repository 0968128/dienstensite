<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model {
    protected $table = 'appointments';
    protected $guarded = [];
    public function klant_id() {
        return $this->belongsTo(User::class);
    }
    public function dienstverlener_id() {
        return $this->belongsTo(User::class);
    }
}