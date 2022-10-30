@extends('layouts.admin',['title'=> 'Sales'])
@section('body')
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h4 class="card-title">Sell Book</h4>
                    <form action="{{route('sales.store')}}" method="post">
                        @csrf
                        @include('admin.sales.forms.inputs')
                        <button class="btn waves-effect">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
