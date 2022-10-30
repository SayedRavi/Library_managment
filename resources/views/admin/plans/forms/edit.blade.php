@extends('layouts.admin',['title' => 'Create Plans'])
@section('body')
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h4 class="card-title">Edit Membership</h4>
                    <form action="{{route('plan.update',['plan'=>$plan->id])}}" method="post">
                        @csrf
                        @method('PATCH')
                        @include('admin.plans.forms.inputs')
                        <button class="btn waves-effect" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
