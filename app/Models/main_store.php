<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class main_store extends Model
{
       protected $fillable = [
        'title',
        'summry',
        'img'
    ];   
    public function store(){
        return $this->hasMany(store::class , 'main_store_id');
    }
}
