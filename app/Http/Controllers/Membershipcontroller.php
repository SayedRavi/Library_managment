<?php

namespace App\Http\Controllers;

use App\Models\Members;
use App\Models\Membership;
use App\Models\Memberships;
use App\Models\Plans;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Membershipcontroller extends Controller
{
    public function index()
    {
        return view('admin.membership.index',[
            'active' => 'memberships',
            'memberships' => Membership::all(),
            'plans' => Plans::all()
        ]);
    }


    public function create()
    {
        $active = 'memberships';
        $members = Members::all();
        $membership = new Membership();
        $plans = Plans::all();

        return view('admin.membership.forms.create',compact('active','membership','members','plans'));
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'member_id' => 'required|unique:memberships',
            'plan_id'=>'required',
            'start_date' => 'required',
            'status' => 'required'
        ]);
        $member = Membership::create($data);

        return redirect()->route('membership.index')->with([
            'message' => 'Added Successfully',
            'classes' => 'green rounded'
        ]);

    }

    public function edit(Membership $membership)
    {
        $active = 'memberships';
        $plans = Plans::all();
        $members = Members::all();
        $memberships = Membership::all();
        $edit = 'edit';
        return view('admin.membership.forms.edit',compact('active',
            'membership','plans','members','memberships','edit'));
    }


    public function update(Request $request, Membership $membership)
    {
        $data = $request->validate([
            'member_id' => 'required',
            'plan_id'=>'required',
            'start_date' => 'required',
            'status' => 'required'
        ]);
        $member = $membership->update($data);

        return redirect()->route('membership.index')->with([
            'message' => 'Added Successfully',
            'classes' => 'green rounded'
        ]);
    }


    public function destroy(Membership $membership)
    {
        $membership->delete();
        return redirect()->route('membership.index')->with([
            'message' => 'Deleted Successfully',
            'classes' => 'green rounded'
        ]);
    }
}
