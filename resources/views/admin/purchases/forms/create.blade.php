@extends('layouts.admin',['title'=>'Add Purchases'])
@section('body')
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h4 class="card-title">Add Purchases</h4>
                    <form action="{{route('purchases.store')}}" method="post">
                        @csrf
                        @include('admin.purchases.forms.inputs')
                        <button class="btn waves-effect" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
