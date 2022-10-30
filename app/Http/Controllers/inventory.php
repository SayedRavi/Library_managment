<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class inventory extends Controller
{
    public function index()
    {
        return view('admin.books.forms.inventory',[
            'active' => 'inventory',
            'books' => Books::all()
        ]);
    }
}
