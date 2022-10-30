@extends('layouts.app')
@section('title', 'Admin |'.$title )
@section('content')

    <ul class="sidenav sidenav-fixed" id="sidenav">
        <li>
            <div style="width: 50%; margin: 0 auto;">
                <img src="{{asset('img/112-book-morph-outline (1).gif')}}" width="100%" alt="">
            </div>
        </li>
        <li class="{{$active == 'dashboard'?'active':''}}">
            <a href="{{route('admin.index')}}">
                <i class="material-icons left">dashboard</i>
                Dashboard
            </a>
        </li>
        <li class="{{$active == 'vendors'?'active':''}}">
            <a href="{{route('vendor.index')}}">
                <i class="material-icons left">contact_phone</i>
                Vendors
            </a>
        </li>
        <li class="{{$active == 'locations'?'active':''}}">
            <a href="{{route('location.index')}}">
                <i class="material-icons left">location_searching</i>
                Locations
            </a>
        </li>
        <li class="{{$active == 'books'?'active':''}}">
            <a href="{{route('book.index')}}">
                <i class="material-icons left">book</i>
                Books
            </a>
        </li>
        <li class="{{$active == 'plans'?'active':''}}">
            <a href="{{route('plan.index')}}">
                <i class="material-icons left">assignment</i>
                Membership Plans
            </a>
        </li>
        <li class="{{$active == 'members'?'active':''}}">
            <a href="{{route('member.index')}}">
                <i class="material-icons left">mood</i>
                All Members
            </a>
        </li>
        <li class="{{$active == 'memberships'?'active':''}}">
            <a href="{{route('membership.index')}}">
                <i class="material-icons left">person_add</i>
                Membership
            </a>
        </li>
        <li class="{{$active == 'purchases'?'active':''}}">
            <a href="{{route('purchases.index')}}">
                <i class="material-icons left">money_off</i>
                Purchases
            </a>
        </li>
        <li class="{{$active == 'rented'?'active':''}}">
            <a href="{{route('rented.index')}}">
                <i class="material-icons left">low_priority</i>
                Rent Books
            </a>
        </li>
        <li class="{{$active == 'sales'?'active':''}}">
            <a href="{{route('sales.index')}}">
                <i class="material-icons left">local_atm</i>
                Sales
            </a>
        </li>
        <li class="{{$active == 'inventory'?'active':''}}">
            <a href="{{route('inventory.index')}}">
                <i class="material-icons left">local_mall</i>
                Inventory
            </a>
        </li>
    </ul>
    <div id="container">
        <nav>
            <div class="nav-wrapper teal darken-4">
                <a href="#!" class="brand-logo ml-4" id="logo">Logo</a>
                <a href="#" data-target="sidenav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li>
                        <a class='dropdown-trigger mr-3' href='#' data-target='dropdown1'>
                            <i class="material-icons left">person</i>
                            {{auth()->user()->name}}
                            <i class="material-icons right">keyboard_arrow_down</i>
                        </a>
                        <!-- Dropdown Structure -->
                        <ul id='dropdown1' class='dropdown-content'>
                            <li>
                                <a href="#!">
                                    <i class="material-icons left">person_outline</i>
                                    Profile
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" onclick="$('#logout').submit();">
                                    <i class="material-icons left">exit_to_app</i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        @yield('body')

    </div>
    <form action="{{route('logout')}}" id="logout" method="post">
        @csrf
    </form>

@endsection
