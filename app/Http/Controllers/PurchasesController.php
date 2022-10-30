<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Purchases;
use App\Models\vendors;
use Illuminate\Http\Request;

class PurchasesController extends Controller
{

    public function index()
    {
        return view('admin.purchases.index',[
            'active' => 'purchases',
            'purchases' => Purchases::all()
        ]);
    }


    public function create()
    {
        return view('admin.purchases.forms.create',[
            'active' => 'purchases',
            'vendors' => vendors::all(),
            'books' => Books::all(),
        ]);
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'vendor_id' => 'required',
            'book_id' => 'required',
            'quantity' => 'required',
            'date' => 'required'
        ]);
        Purchases::create($data);
        return redirect()->route('purchases.index')->with([
            'message' => 'Added Successfully',
            'classes' => 'green rounded'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Purchases  $purchases
     * @return \Illuminate\Http\Response
     */
    public function show(Purchases $purchases)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Purchases  $purchases
     * @return \Illuminate\Http\Response
     */
    public function edit(Purchases $purchases)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Purchases  $purchases
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purchases $purchases)
    {
        //
    }

    public function destroy(Purchases $purchase)
    {
        $purchase->delete();
        return redirect()->route('purchases.index')->with([
            'message' => 'Deleted Successfully',
            'classes' => 'green rounded'
        ]);
    }
}
