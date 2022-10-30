@extends('layouts.admin',['title' => 'Plans'])
@section('body')
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <div class="card-title">
                        <h4 class="card-title">Membership Plans
                            <a class="btn waves-effect right" href="{{route('plan.create')}}">
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
                    </div>

                @if($plans->count()<1)
                            <p class="center red-text my-5">No record found</p>
                        @else
                    <table>
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Charges</th>
                            <th>Duration</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            @php $i=1 @endphp
                            @foreach($plans as $plan)
                                <td>{{$i++}}</td>
                                <td>{{$plan->title}}</td>
                                <td>{{$plan->charges}}</td>
                                <td>{{$plan->duration}} Days</td>
                                <td>
                                    <form action="{{route('plan.destroy', ['plan'=>$plan->id])}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-small btn-floating transparent">
                                            <i class="material-icons red-text">delete</i>
                                        </button>
                                        <a class="btn btn-small btn-floating transparent" href="{{route('plan.edit',['plan'=>$plan->id])}}">
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
