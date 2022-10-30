<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rentedbooks extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function book()
    {
        return $this->belongsTo(Books::class);
    }

    public function member()
    {
        return $this->belongsTo(Members::class);
    }
}

