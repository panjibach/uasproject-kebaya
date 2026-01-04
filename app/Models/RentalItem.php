<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RentalItem extends Model
{
    public function kebayaItem(){
        return $this->belongsTo(KebayaItem::class);
    }

    public function rental(){
        return $this->belongsTo(Rental::class);
    }
}
