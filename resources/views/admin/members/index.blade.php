@extends('layouts.admin',['title'=>'Members'])
@section('body')
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h4 class="card-title">Members
                        <a href="{{route('member.create')}}" class="btn waves-effect right">
                            Add
                        </a>
                    </h4>
                    <div id="member">
                        <div class="row">
                            <div class="col s12 m8 input-field">
                                <i class="material-icons prefix">search</i>
                                <input type="search" name="search" onkeyup="ar.search(event,'table tr')">
                                <label for="search">Search Members Name</label>
                            </div>
                        </div>
                    </div>
                    @if($members->count()<1)
                        <p class="center red-text">No record found</p>
                    @else
                        <table>
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Address</th>
                                <th>Id-Proof</th>
                                <th>Photo</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                @php $i=1 @endphp
                                @foreach($members as $member)
                                <td>{{$i++}}</td>
                                <td>{{$member->name}}</td>
                                <td>{{$member->contact}}</td>
                                <td>{{$member->Address}}</td>
                                <td>
                                    <div style="width: 50px; height: 50px; overflow: hidden">
                                        <img src="{{asset('storage/'.$member->id_proof)}}" width="100%" alt="">
                                    </div>
                                </td>
                                    <td>
                                    <div style="width: 50px; height: 50px; overflow: hidden">
                                        <img src="{{asset('storage/'.$member->photo)}}" width="100%" alt="">
                                    </div>
                                </td>
                                    <td>
                                        <form action="{{route('member.destroy', ['member'=>$member->id])}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-small btn-floating transparent">
                                                <i class="material-icons red-text">delete</i>
                                            </button>
                                            <a class="btn btn-floating btn-small transparent" href="{{route('member.edit',['member'=>$member->id])}}">
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
