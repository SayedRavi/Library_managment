@extends('layouts.admin',['title'=>'Create Vendors'])
@section('body')
<div class="row">
    <div class="col s12">
        <div class="card">
            <div class="card-content">
                <h4 class="card-title">Add Vendor</h4>
                <form action="{{route('vendor.store')}}" method="post">
                    @csrf
                    @include('admin.vendors.forms.inputs')
                    <button class="btn waves-effect" type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
