@extends('layouts.admin',['title' => 'Add Member'])
@section('body')
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h4 class="card-title">Add Membership</h4>
                    <form action="{{route('membership.store')}}" method="post">
                        @csrf
                        @include('admin.membership.forms.inputs')
                        <button class="btn waves-effect" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
