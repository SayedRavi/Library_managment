<?php

namespace App\Http\Controllers;

use App\Models\locations;
use Illuminate\Http\Request;

class LocationsController extends Controller
{
    public function index()
    {
        return view('admin.locations.index',[
            'active' => 'locations',
            'locations' => locations::all()
        ]);
    }

    public function create()
    {
        return view('admin.locations.forms.create',[
            'active' => 'locations'
        ]);
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|unique:locations'
        ]);
        locations::create($data);
        return redirect()->route('location.index')->with([
            'message' => 'Created Successfully',
            'classes' => 'green rounded'
        ]);
    }


    public function edit(locations $location)
    {
        $active = 'locations';
        return view('admin.locations.forms.edit',compact('active','location'));
    }


    public function update(Request $request, locations $location)
    {
        $data = $request->validate([
            'name' => 'required|string'
        ]);
        $location->update($data);
        return redirect()->route('location.index')->with([
            'message' => 'Updated successfully',
            'classes' => 'green rounded'
        ]);
    }

    public function destroy(locations $location)
    {

       $location->delete();
       return redirect()->route('location.index')->with([
           'message' => 'Deleted successfully',
           'classes' => 'green rounded'
       ]);
    }
}
