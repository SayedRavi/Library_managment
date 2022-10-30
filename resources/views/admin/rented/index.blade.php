@extends('layouts.admin',['title'=>'Rented Books'])
@section('body')
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h4 class="card-title">All Rented Books
                        <a href="{{route('rented.create')}}" class="btn waves-effect right">
                            Add
                        </a>
                    </h4>
                    <div id="plan">
                        <div class="row">
                            <div class="col s12 m8 input-field">
                                <i class="material-icons prefix">search</i>
                                <input type="search" name="search" onkeyup="ar.search(event,'table tr')">
                                <label for="search">Search Book-Member Name</label>
                            </div>
                        </div>
                    </div>
                    @if($renteds->count() < 1)
                        <p class="center red-text">No record found</p>
                    @else
                    <table>
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Member</th>
                            <th>Book</th>
                            <th>Quantity</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $i=1 @endphp
                        @foreach($renteds as $rented)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$rented->member->name}}</td>
                                <td>{{$rented->book->title}}</td>
                                <td>{{$rented->quantity}}</td>
                                <td>{{$rented->date}}</td>
                                <td>
                                    <form action="{{route('rented.destroy',['rented'=>$rented->id])}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-small btn-floating transparent">
                                            <i class="material-icons red-text">delete</i>
                                        </button>
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
