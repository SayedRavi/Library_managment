@extends('layouts.admin',['title' => 'Rent book'])
@section('body')
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h4 class="card-title">Rent Books</h4>
                    <form action="{{route('rented.store')}}" method="post">
                        @csrf
                        @include('admin.rented.forms.inputs')
                        <button class="btn waves-effect" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
