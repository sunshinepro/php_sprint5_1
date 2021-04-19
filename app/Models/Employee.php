<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public $fillable = ['id', 'e_name', 'e_surname','p_id'];

    public function employees(){
        return $this->belongsTo('App\Models\Projects');
    }

}
