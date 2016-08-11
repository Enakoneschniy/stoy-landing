<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'describe', 'image', 'active'];

    public function portfolios(){
        return $this->hasMany(Portfolio::class);
    }
    
    public function getLatestProjects($count = 6){
        return $this->published()->orderBy('created_at', 'desc')->take($count)->get();
    }

    public function getActiveProjects(){
        return $this->published()->orderBy('created_at', 'desc')->get();
    }
    
    public function scopePublished($query){
        return $query->where('active', 1);
    }
}
