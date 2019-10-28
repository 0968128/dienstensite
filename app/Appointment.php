<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Appointment extends Model {
    use Searchable;

    public function shouldBeSearchable() {
        return $this->isPublished();
        $orders = App\Order::search('PC')->get();
    }
    
    public function toSearchableArray() {
        $array = $this->toArray();
        return $array;
    }
    protected $table = 'appointments';
    public function getScoutKey() {
        App\Order::where('', '', '')->searchable();
        $user->orders()->searchable();
        $order->save();
        $orders = App\Order::search('PC')->get();
    }
    public function searchableAs() {
        $orders = App\Order::search('')->where('', )->get();
    }
}