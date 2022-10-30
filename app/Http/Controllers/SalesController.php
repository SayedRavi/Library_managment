<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Sales;
use Illuminate\Http\Request;

class SalesController extends Controller
{

    public function index()
    {
        return  view('admin.sales.index',[
            'active' => 'sales',
            'sales' => Sales::all()
        ]);
    }

    public function create()
    {
        return view('admin.sales.forms.create',[
            'active' => 'sales',
            'books' => Books::all()
        ]);
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|min:3|max:20',
            'book_id' => 'required',
            'quantity' => 'required',
            'remark' => 'required'
        ]);
        Sales::create($data);
        return redirect()->route('sales.index')->with([
            'message' => 'Sale record Saved Successfully',
            'classes' => 'green rounded'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function show(Sales $sales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function edit(Sales $sales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sales $sales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sales $sales)
    {
        //
    }
}
