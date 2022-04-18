<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ="products";
    protected $fillable=['title','slug','summary','description','photo','stock','size','condition','status','price','discount'];
}
