<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['title', 'describe', 'image', 'sort', 'active', 'price'];

    public function getActiveServices(){
        return $this->published()->orderBy('sort', 'ASC')->get();
    }
    public function getLatestServices($count = 4){
        return $this->published()->orderBy('sort', 'ASC')->take($count)->get();
    }
    public function scopePublished($query){
        return $query->where('active', 1);
    }
}
