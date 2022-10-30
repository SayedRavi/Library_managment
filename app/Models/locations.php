<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Location;

class locations extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function book()
    {
        return $this->belongsToMany(Books::class);
    }
}
