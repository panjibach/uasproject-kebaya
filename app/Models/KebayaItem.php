<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KebayaItem extends Model
{
    public function model(){
        return $this->belongsTo(KebayaModel::class, 'kebaya_model_id');
    }
}
