<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Members;
use App\Models\Rentedbooks;
use Illuminate\Http\Request;

class RentedbooksController extends Controller
{

    public function index()
    {
        return view('admin.rented.index',[
            'active' => 'rented',
            'renteds' => Rentedbooks::all()
        ]);
    }


    public function create()
    {
        return view('admin.rented.forms.create',[
            'active' => 'rented',
            'members' => Members::all(),
            'books' => Books::all()
        ]);
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'member_id' => 'required',
            'book_id' => 'required',
            'quantity' => 'required',
            'date' => 'required'
        ]);
        Rentedbooks::create($data);
        return redirect()->route('rented.index')->with([
            'message' => 'Recorded Successfully',
            'classes' => 'green rounded'
         ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rentedbooks  $rentedbooks
     * @return \Illuminate\Http\Response
     */
    public function show(Rentedbooks $rentedbooks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rentedbooks  $rentedbooks
     * @return \Illuminate\Http\Response
     */
    public function edit(Rentedbooks $rentedbooks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rentedbooks  $rentedbooks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rentedbooks $rentedbooks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rentedbooks  $rentedbooks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rentedbooks $rentedbooks)
    {
        //
    }
}
