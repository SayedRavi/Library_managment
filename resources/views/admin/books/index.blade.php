@extends('layouts.admin',['title'=>'Books'])
@section('body')
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h4 class="card-title">Books
                        <a class="btn right" href="{{route('book.create')}}">
                            Add
                        </a>
                    </h4>
                    <div id="vendor">
                        <div class="row">
                            <div class="col s12 m8 input-field">
                                <i class="material-icons prefix">search</i>
                                <input type="search" name="search" onkeyup="ar.search(event,'table tr')">
                                <label for="search">Search Book Name</label>
                            </div>
                        </div>
                    </div>
                    @if($books->count()<1)
                        <p class="center red-text my-5">No record found</p>
                    @else
                        <table>
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Quantity</th>
                                <th>Location</th>
                                <th>Inventory</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i = 1 @endphp
                            @foreach($books as $book)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$book->title}}</td>
                                    <td>{{$book->author}}</td>
                                    <td>{{$book->quantity}}</td>
                                    <td>{{$book->location_id}}</td>
{{--//location name is not being showed through relationship but other attributes can be accessed--}}
{{--                                    //need to be fixed--}}
                                    <td>
                                        <a class="btn transparent black-text" href="{{route('book.show',$book->id)}}">
                                            Inventory
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{route('book.destroy',['book'=>$book->id])}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-small btn-floating transparent">
                                                <i class="material-icons red-text">delete</i>
                                            </button>
                                            <a class="btn btn-floating btn-small transparent" href="{{route('book.edit',['book'=>$book->id])}}">
                                                <i class="material-icons yellow-text">edit</i>
                                            </a>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
