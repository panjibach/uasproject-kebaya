<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function items() {
        return $this->hasMany(RentalItem::class);
    }

    public function payment() {
        return $this->hasOne(Payment::class);
    }

    public function return() {
        return $this->hasOne(ReturnModel::class);
    }
}
