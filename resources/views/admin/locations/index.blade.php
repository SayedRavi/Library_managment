@extends('layouts.admin',['title'=>'locations'])
@section('body')
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h4 class="card-title">Locations
                        <a href="{{route('location.create')}}">
                            <span class="btn waves-effect right">Add</span>
                        </a>
                    </h4>
                    <div id="vendor">
                        <div class="row">
                            <div class="col s12 m8 input-field">
                                <i class="material-icons prefix">search</i>
                                <input type="search" name="search" onkeyup="ar.search(event,'table tr')">
                                <label for="search">Search Vendor Name</label>
                            </div>
                        </div>
                    </div>
                    @if($locations->count()<1)
                        <p class="center red-text my-5">No record found</p>
                    @else
                        <table>
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Location</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i=1 @endphp
                            @foreach($locations as $location)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$location->name}}</td>
                                <td>
                                    <form action="{{route('location.destroy',['location'=>$location->id])}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-small btn-floating transparent">
                                            <i class="material-icons red-text">delete</i>
                                        </button>
                                        <a class="btn-floating btn btn-small transparent" href="{{route('location.edit',['location'=>$location->id])}}">
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
