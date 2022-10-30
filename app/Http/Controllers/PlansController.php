<?php

namespace App\Http\Controllers;

use App\Models\Plans;
use Illuminate\Http\Request;

class PlansController extends Controller
{

    public function index()
    {
        return view('admin.plans.indedx',[
            'active' => 'plans',
            'plans' => Plans::all()
        ]);
    }

    public function create()
    {
        return view('admin.plans.forms.create',[
            'active' => 'plans'
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|min:3|max:20',
            'charges' => 'required',
            'duration' => 'required'
        ]);
        Plans::create($data);
        return redirect()->route('plan.index')->with([
            'message' => 'Created Successfully',
            'classes' => 'green rounded'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plans  $plans
     * @return \Illuminate\Http\Response
     */
    public function show(Plans $plans)
    {
        //
    }

    public function edit(Plans $plan)
    {
        $active = 'plans';
        return view('admin.plans.forms.edit',compact('active','plan'));
    }

    public function update(Request $request, Plans $plan)
    {
        $data = $request->validate([
            'title' => 'required|string|min:3|max:20',
            'charges' => 'required',
            'duration' => 'required'
        ]);
        $plan->update($data);
        return redirect()->route('plan.index')->with([
            'message' => 'Updated Successfully',
            'classes' => 'green rounded'
        ]);
    }


    public function destroy(Plans $plan)
    {
        $plan->delete();
        return redirect()->route('plan.index')->with([
            'message' => 'Deleted Successfully',
            'classes' => 'green rounded'
    ]);
    }
}
