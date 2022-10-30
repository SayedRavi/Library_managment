@extends('layouts.admin',['title' => 'Create Plans'])
@section('body')
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h4 class="card-title">Add Membership</h4>
                    <form action="{{route('plan.store')}}" method="post">
                        @csrf
                        @include('admin.plans.forms.inputs')
                        <button class="btn waves-effect">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
