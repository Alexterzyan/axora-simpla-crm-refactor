<?php


namespace App\Eloquent\Models;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;

    public function features(){
        return $this->hasOne(Feature::class);
    }

}