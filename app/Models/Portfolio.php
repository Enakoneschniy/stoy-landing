<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = ['title', 'image', 'project_id', 'active'];

    public function project(){
        return $this->belongsTo(Project::class);
    }
}
