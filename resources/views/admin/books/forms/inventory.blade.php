@extends('layouts.admin',['title'=>'Inventory'])
@section('body')
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h4 class="card-title">Available Quantity of Books</h4>
                    <table>
                        <thead>
                        <tr>
                            <th>Book Title</th>
                            <th>Book Author</th>
                            <th>Available Quantity</th>
                            <th>Location</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($books as $book)
                            <tr>
                                <td>{{$book->title}}</td>
                                <td>{{$book->author}}</td>
                                <td>{{$book->quantity}}</td>
                                <td>{{$book->location_id}}</td>
{{--                                //Location name is not showing through relationship, but the ID and other attributes--}}
{{--                                //can be accessed--}}
{{--                                //need to fix--}}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
