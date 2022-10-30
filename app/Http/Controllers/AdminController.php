<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Members;
use App\Models\Purchases;
use App\Models\Sales;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index',[
            'active' => 'dashboard',
            'books' => Books::all()->count(),
            'members' => Members::all()->count(),
            'sales' => Sales::all()->count(),
            'purchases' => Purchases::all()->count()

        ]);
    }
}
