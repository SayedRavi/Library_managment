@extends('layouts.admin',['title' => 'Membership'])
@section('body')
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h4 class="card-title">Membership
                        <a class="btn waves-effect right" href="{{route('membership.create')}}">
                            Add
                        </a>
                    </h4>
                    <div id="membership">
                        <div class="row">
                            <div class="col s12 m8 input-field">
                                <i class="material-icons prefix">search</i>
                                <input type="search" name="search" onkeyup="ar.search(event,'table tr')">
                                <label for="search">Search Members</label>
                            </div>
                        </div>
                    </div>
                    @if($memberships->count()<1)
                        <p class="center red-text my-5">No record found</p>
                    @else
                    <table>
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Member</th>
                            <th>Plan</th>
                            <th>Start Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $i = 1 @endphp
                        @foreach($memberships as $member)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$member->member->name}}</td>
                            <td>{{$member->plan->title}}</td>
                            <td>{{$member->start_date}}</td>
                            <td>{{$member->status ? 'Active' : 'Inactive'}}</td>
                            <td>
                                <form action="{{route('membership.destroy',['membership'=>$member->id])}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-floating btn-small transparent">
                                        <i class="material-icons red-text">delete</i>
                                    </button>
                                    <a class="btn btn-small btn-floating transparent" href="{{route('membership.edit',['membership'=>$member->id])}}">
                                        <i class="material-icons yellow-text">edit</i>
                                    </a>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                        @endif

                        </tbody>
                    </table>
            </div>
        </div>
    </div>
@endsection
