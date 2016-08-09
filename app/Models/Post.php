<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'preview_text', 'detail_text', 'image', 'video', 'active'];

    public function getLatestPosts($count = 3){
        return $this->published()->orderBy('created_at', 'asc')->take($count)->get();
    }

    public function getActivePosts(){
        return $this->published()->orderBy('created_at', 'asc')->paginate(10);
    }

    public function scopePublished($query){
        return $query->where('active', 1);
    }
}
