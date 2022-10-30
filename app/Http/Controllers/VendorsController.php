<?php

namespace App\Http\Controllers;

use App\Models\vendors;
use Illuminate\Http\Request;

class VendorsController extends Controller
{
    public function index()
    {
        return view('admin.vendors.index',[
            'active' => 'vendors',
            'vendors' => vendors::all()
        ]);
    }

    public function create()
    {
        return view('admin.vendors.forms.create',[
            'active' => 'vendors',
        ]);
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|min:3|max:30|unique:vendors',
            'address' => 'required|string',
            'contact' => 'required'
        ]);
        vendors::create($data);
        return redirect()->route('vendor.index')->with([
            'message' => 'Created Successfully',
            'classes' => 'green rounded'
            ]);
    }

    public function edit(vendors $vendor)
    {
        $active = 'vendors';
        return view('admin.vendors.forms.edit',compact('active', 'vendor'));
    }


    public function update(Request $request, vendors $vendor)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'contact' => 'required'
        ]);
        $vendor->update($data);
        return redirect()->route('vendor.index')->with([
            'message' => 'Updated Successfully',
            'classes' => 'green rounded'
        ]);
    }


    public function destroy(vendors $vendor)
    {

        $vendor->delete();
        return redirect()->route('vendor.index')->with([
            'message' => 'Deleted successfully',
            'classes' => 'green rounded'
        ]);
    }
}
