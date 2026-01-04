<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KebayaModel extends Model
{
    public function items(){
        return $this->hasMany(KebayaItem::class);
    }
}
