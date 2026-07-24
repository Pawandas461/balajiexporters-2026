<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'slug','desc','title','meta_title','meta_desc','meta_keys','author','status','image','created_at'
    ];
    public function brackets()
    {
        return $this->belongsToMany(Bracket::class, 'blog_category_blogs', 'blog_id', 'bracket_id');
    }
}
