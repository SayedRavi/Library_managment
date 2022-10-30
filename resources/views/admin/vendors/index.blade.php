@extends('layouts.admin',['title'=>'vendors'])
@section('body')
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h4 class="card-title">Add vendors
                        <a href="{{route('vendor.create')}}">
                        <span class="btn waves-effect right">
                            Add</span>
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
                    @if($vendors->count()<1)
                        <p class="center red-text my-5">No record found</p>
                    @else
                    <table>
                        <thead>
                        <tr>
                            @php $i = 1; @endphp
                            <th>No</th>
                            <th>Full Name</th>
                            <th>Contact</th>
                            <th>Address</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            @foreach($vendors as $vendor)
                            <td>{{$i++}}</td>
                            <td class="names">{{$vendor->name}}</td>
                            <td>{{$vendor->contact}}</td>
                            <td>{{$vendor->address}}</td>
                                <td>
                                    <form action="{{route('vendor.destroy',['vendor'=>$vendor->id])}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-small btn-floating waves-effect transparent">
                                            <i class="material-icons red-text">delete</i>
                                        </button>
                                        <a href="{{route('vendor.edit',['vendor'=>$vendor->id])}}" class="btn btn-floating btn-small transparent waves-effect">
                                            <i class="material-icons yellow-text">edit</i>
                                        </a>
                                    </form>
                                </td>
                        </tr>
                        </tbody>
                        @endforeach
                    </table>
                        @endif
                </div>
            </div>
        </div>
    </div>
    @endsection
