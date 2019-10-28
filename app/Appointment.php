<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Appointment extends Model {
    protected $table = 'appointments';
    use Searchable;
}