@extends('layouts.admin',['title'=>'Admin'])
@section('title','dashboard')
@section('body')
    <div class="row">
        <div class="col s12 m3 l3">
            <div class="card teal darken-3 white-text">
                <div class="card-content">
                    <p class="card-title center">Books</p>

                    <p class="center">{{$books}}</p>
                </div>
            </div>
        </div>
        <div class="col s12 m3 l3">
            <div class="card teal darken-3 white-text">
                <div class="card-content">
                    <p class="card-title center">Members</p>
                    <p class="center">{{$members}}</p>
                </div>
            </div>
        </div>
        <div class="col s12 m3 l3">
            <div class="card teal darken-3 white-text">
                <div class="card-content">
                    <p class="card-title center">Sales</p>
                    <p class="center">{{$sales}}</p>
                </div>
            </div>
        </div>
        <div class="col s12 m3 l3">
            <div class="card teal darken-3 white-text">
                <div class="card-content">
                    <p class="card-title center">Purchases</p>
                    <p class="center">{{$purchases}}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m8 l8">
                <div class="card">
                    <div class="card-content">
                        <h4 class="card-title">{{now()}}</h4>
                        <p class="my-5"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
