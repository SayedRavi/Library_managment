@extends('layouts.admin',['title'=>'locations'])
@section('body')
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h4 class="card-title">Add Location</h4>
                    <form action="{{route('location.store')}}" method="post">
                        @csrf
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
