<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Utils;

class Members extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function membership()
    {
        return $this->hasMany(Membership::class);
    }
    public function rentedbook()
    {
        return $this->hasMany(Rentedbooks::class);
    }
}
