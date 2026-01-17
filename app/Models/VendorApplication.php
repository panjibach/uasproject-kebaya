<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VendorApplication extends Model
{
    protected $fillable = [
        'user_id',
        'shop_name',
        'ktp_number',
        'ktp_image',
        'address',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //query scopes for status
    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    public function scopeApproved($query)
    {
        return $query->where('status', 'approved');
    }

    public function scopeRejected($query)
    {
        return $query->where('status', 'rejected');
    }


    public function isPending(): bool
    {
        return $this->status === 'pending';
    }

    public function isApproved(): bool
    {
        return $this->status === 'approved';
    }

    public function isRejected(): bool
    {
        return $this->status === 'rejected';
    }
}
