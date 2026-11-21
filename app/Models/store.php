<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class store extends Model
{
    protected $fillable = [
        'title',
        'summry',
        'path',
        'format'
    ];  
    public function main_store(){
        return $this->hasMany(main_store::class , 'main_store_id');
    } 
}
