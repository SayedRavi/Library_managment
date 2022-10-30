@extends('layouts.app')
@section('title','login')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12 l8 offset-l2 mt-5">
                <div class="card">
                    <div class="card-content">
                        <h4 align="center" class="card-title">Login</h4>
                        <form action="{{route('login')}}" method="post">
                            @csrf
                            <div class="row">
                            <div class="col s12 input-field">
                                <i class="material-icons prefix">person</i>
                                <input type="text" name="email" id="email" class="@error('email') invalid @enderror" value="{{old('email')}}">
                                <label for="email">Email</label>
                                @error('email')
                                <blockquote>{{$message}}</blockquote>
                                @enderror
                            </div>
                                <div class="col s12 input-field">
                                    <i class="material-icons prefix">lock</i>
                                    <input type="password" name="password" id="password" class="@error('password') invalid @enderror" value="{{old('password')}}">
                                    <label for="password">Password</label>
                                    @error('password')
                                    <blockquote>{{$message}}</blockquote>
                                    @enderror
                                </div>
                                <button class="btn ml-5" type="submit" >Login</button>
                                <a href="#" class="right mr-3">forget password</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
