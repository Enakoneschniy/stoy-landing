<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public $fillable = ['title', 'url', 'active'];

    public function getMenu(){
        return $this->published()->orderBy('sort', 'ASC')->get();
    }

    public function scopePublished($query){
        return $query->where('active', 1);
    }
}
