<?php


namespace App\Eloquent\Models;


use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    public $timestamps = false;

    public function product(){
        return $this->belongsTo(Product::class);
    }

}