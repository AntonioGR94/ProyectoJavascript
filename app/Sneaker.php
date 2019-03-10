<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sneaker extends Model
{
    protected $fillable = ['brand_id','name', 'slug', 'description','release','available', 'price','sport','colorway','size'];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
