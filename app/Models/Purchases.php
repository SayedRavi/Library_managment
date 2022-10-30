<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchases extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function vendor()
    {
        return $this->belongsTo(vendors::class);
    }
    public function book()
    {
        return $this->belongsTo(Books::class);
    }
}
