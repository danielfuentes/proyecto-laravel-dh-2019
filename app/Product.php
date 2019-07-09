<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    protected $guarded = [];

    
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function size()
    {
        return $this->belongsTo('App\Size');
    }

    public function genre()
    {
        return $this->belongsTo('App\Genre');
    }
}
