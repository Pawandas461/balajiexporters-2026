<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'user_id','name', 'phone', 'country', 'state', 'city', 'pin', 'addr_line1', 'addr_line2', 'landmark','gst_no', 'company', 'address_type'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
