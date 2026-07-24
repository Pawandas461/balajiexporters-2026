<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $fillable = ['name','location','country', 'phone', 'phone1','email','email1','subject','message','follow_up_msg','source','company','last_contacted_at','is_contacted', 'business_type', 'product_categories', 'order_quantity'];

    protected $casts = [
        'product_categories' => 'array',
    ];
}