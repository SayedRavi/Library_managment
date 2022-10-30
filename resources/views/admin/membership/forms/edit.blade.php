@extends('layouts.admin',['title' => 'Add Member'])
@section('body')
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h4 class="card-title">Edit Membership</h4>
                    <form action="{{route('membership.update',['membership'=>$membership->id])}}" method="post">
                        @csrf
                        @method('PATCH')
                        @include('admin.membership.forms.inputs')
                        <button class="btn waves-effect" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
