@extends('layouts.admin',['title' => 'Create Plans'])
@section('body')
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h4 class="card-title">Add Membership</h4>
                    <form action="{{route('member.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @include('admin.members.forms.inputs')
                        <button class="btn waves-effect" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
