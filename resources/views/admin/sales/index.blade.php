@extends('layouts.admin',['title' => 'Sales'])
@section('body')
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h4 class="card-title">Sales
                        <a class="btn waves-effect right" href="{{route('sales.create')}}">
                            Add
                        </a>
                    </h4>
                    <div id="sale">
                        <div class="row">
                            <div class="col s12 m8 input-field">
                                <i class="material-icons prefix">search</i>
                                <input type="search" name="search" onkeyup="ar.search(event,'table tr')">
                                <label for="search">Search for sales Record</label>
                            </div>
                        </div>
                    @if($sales->count() < 1)
                        <p class="center red-text">No record found</p>

                    @else
                        <table>
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Book</th>
                                <th>Quantity</th>
                                <th>Remark</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i=1 @endphp
                            @foreach($sales as $sale)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$sale->name}}</td>
                                <td>{{$sale->book->title}}</td>
                                <td>{{$sale->quantity}}</td>
                                <td>{{$sale->remark}}</td>
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
