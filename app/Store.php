<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = ['name','description','phone','mobile_phone','slug'];
   
    public function user(){
        return $this->belongsTo(User::class,'users_id');
    } 

    public function products()
    {
       return $this->hasMany(Product::class);
    }
}
