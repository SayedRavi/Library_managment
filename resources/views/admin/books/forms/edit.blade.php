@extends('layouts.admin',['title'=>'Create Book'])
@section('body')
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h4 class="card-title">Edit Book</h4>
                    <form action="{{route('book.update',['book'=>$book->id])}}" method="post">
                        @csrf
                        @method('PATCH')
                        @include('admin.books.forms.inputs')
                        <button class="btn" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
