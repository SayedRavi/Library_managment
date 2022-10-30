<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;
use phpDocumentor\Reflection\Location;

class Books extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function location()
    {
        return $this->hasMany(Location::class);
    }

    public function purchase()
    {
        return $this->belongsTo(Purchases::class);
    }

    public function rentedbook()
    {
        return $this->hasMany(Rentedbooks::class);
    }

    public function sales()
    {
        return $this->hasMany(Sales::class);
    }
}
