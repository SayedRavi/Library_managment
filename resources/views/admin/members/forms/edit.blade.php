@extends('layouts.admin',['title' => 'Create Plans'])
@section('body')
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h4 class="card-title">Edit Member</h4>
                    <form action="{{route('member.update',['member'=>$member->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        @include('admin.members.forms.inputs')
                        <button class="btn waves-effect" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
