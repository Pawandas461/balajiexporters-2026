<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    protected $fillable = [
        'user_id','user_name','user_email','activity','url','method','ip_address','user_agent'
    ];
}
