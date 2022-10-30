@extends('layouts.admin',['title'=>'Create Vendors'])
@section('body')
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h4 class="card-title">Edit Vendor</h4>
                    <form action="{{route('vendor.update',['vendor'=>$vendor->id])}}" method="post">
                        @csrf
                        @method('PATCH')
                        @include('admin.vendors.forms.inputs')
                        <button class="btn waves-effect" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
