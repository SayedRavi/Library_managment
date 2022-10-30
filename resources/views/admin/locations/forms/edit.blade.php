@extends('layouts.admin',['title'=>'locations'])
@section('body')
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h4 class="card-title">Edit Location</h4>
                    <form action="{{route('location.update',['location'=>$location->id])}}" method="post">
                        @csrf
                        @method('PATCH')
                        @include('admin.locations.forms.inputs')
                        <button class="btn waves-effect" type="submit">
                            Save
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
