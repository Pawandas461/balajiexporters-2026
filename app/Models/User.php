<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, Notifiable;
    protected $fillable = [
        'name','email_otp','phone_otp','phone','role',
        // 'referral_user_id','referral_code',
        'email', 'password','email_verified_at','block','phone_verified_at','country','discount','discount_type',
        'bill_name','bill_phone','bill_email','bill_country', 'bill_state','bill_city','bill_addr_line1','bill_addr_line2','bill_landmark','bill_pin', 
        'gst_no','business_name','email_change'
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'phone_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function addresses(): HasMany
    {
        return $this->hasMany(Address::class,'user_id')->orderBy('created_at', 'DESC');
    }
    public function pendingOrders(): HasMany
    {
        return $this->hasMany(OrderPending::class,'user_id');
    }
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class,'user_id');
    }
    public function wishlistProducts()
    {
        return $this->belongsToMany(Product::class, 'wishlists', 'user_id', 'product_id');
    }
}
