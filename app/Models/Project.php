<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public $fillable = ['id', 'p_name', 'p_description'];

    public function projects(){
        return $this->hasMany('App\Models\Empoloyee');
    }

    
}
