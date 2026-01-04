<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function role() {
        return $this->belongsTo(Role::class);
    }

    public function rentals() {
        return $this->hasMany(Rental::class);
    }

    public function kebayaItems() {
        return $this->hasMany(KebayaItem::class, 'vendor_id');
    }
}
