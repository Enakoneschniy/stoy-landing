<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'describe', 'image', 'active'];

    public function portfolios(){
        return $this->hasMany(Portfolio::class);
    }
}
