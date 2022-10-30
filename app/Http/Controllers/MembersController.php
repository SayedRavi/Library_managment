<?php

namespace App\Http\Controllers;

use App\Models\Members;
use App\Models\Plans;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function index()
    {
        return view('admin.members.index',[
            'active' => 'members',
            'members' => Members::all()
        ]);
    }

    public function create()
    {
        return view('admin.members.forms.create',[
            'active' => 'members'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:20',
            'contact' => 'required',
            'address' => 'required',
            'id_proof' => 'required|image|max:5000',
            'photo' => 'required|image|max:5000',
        ]);
       $member =  Members::create([
            'name' => $request->name,
            'contact' => $request->contact,
            'address' => $request->address,
        ]);
       if ($request->file('id_proof')!= null){
           $member->update([
               'id_proof' => $request->file('id_proof')->store('proof_ids','public')
           ]);
       }
       if ($request->file('photo')!= null){
           $member->update([
               'photo' => $request->file('photo')->store('member_photos','public')
           ]);
       }
       return redirect()->route('member.index')->with([
           'message' => 'Member added successfully',
           'classes' => 'green rounded'
       ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Members  $members
     * @return \Illuminate\Http\Response
     */
    public function show(Members $members)
    {
        //
    }


    public function edit(Members $member)
    {
        $active = 'members';
        return view('admin.members.forms.edit',compact('active','member'));
    }


    public function update(Request $request, Members $member)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:20',
            'contact' => 'required',
            'address' => 'required',
            'id_proof' => 'sometimes|image|max:5000',
            'photo' => 'sometimes|image|max:5000',
        ]);
        $memberd =  $member->update([
            'name' => $request->name,
            'contact' => $request->contact,
            'address' => $request->address,
        ]);
        if ($request->hasFile('id_proof'))
        {if (file_exists(public_path('storage/'.$member->id_proof))){
            unlink(public_path('storage/'.$member->id_proof));
        }
            $member->update([
                'id_proof'=> $request->file('id_proof')->store('proof_ids','public')
            ]);
        }
        if ($request->hasFile('photo'))
        {if (file_exists(public_path('storage/'.$member->photo))){
            unlink(public_path('storage/'.$member->photo));
        }
            $member->update([
                'photo'=> $request->file('photo')->store('member_photos','public')
            ]);
        }
        return redirect()->route('member.index')->with([
            'message' => 'Members information has been updated successfully',
            'classes' => 'green rounded'
        ]);
    }

    public function destroy(Members $member)
    {
        $member->delete();
        if (file_exists(public_path('storage/'.$member->id_proof))){
            unlink(public_path('storage/'.$member->id_proof));
        }
        if (file_exists(public_path('storage/'.$member->photo))){
            unlink(public_path('storage/'.$member->photo));
        }
        return redirect()->route('member.index')->with([
            'message' => 'Member removed Successfully',
            'classes' => 'green rounded'
        ]);
    }
}
