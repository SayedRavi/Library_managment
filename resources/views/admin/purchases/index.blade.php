@extends('layouts.admin',['title'=> 'Purchases'])
@section('body')
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h4 class="card-title">Purchases
                        <a class="btn waves-effect right" href="{{route('purchases.create')}}">
                            Add
                        </a>
                    </h4>
                    <div id="plan">
                        <div class="row">
                            <div class="col s12 m8 input-field">
                                <i class="material-icons prefix">search</i>
                                <input type="search" name="search" onkeyup="ar.search(event,'table tr')">
                                <label for="search">Search membership Name</label>
                            </div>
                        </div>
                    </div>
                    <table>
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Vendor</th>
                            <th>Book</th>
                            <th>Quantity</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $i=1 @endphp
                        @foreach($purchases as $purchase)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$purchase->vendor->name}}</td>
                            <td>{{$purchase->book->title}}</td>
                            <td>{{$purchase->quantity}}</td>
                            <td>{{$purchase->date}}</td>
                            <td>
                                <form action="{{route('purchases.destroy',['purchase'=>$purchase->id])}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-floating btn-small transparent">
                                        <i class="material-icons red-text">delete</i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
