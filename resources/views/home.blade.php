@extends('layouts.app')

@section('content')
<div class="container">
    <ul class="navbar-nav my-1">
        <li class="nav-item">
            <a class="nav-link" href="{{url('book')}}">Book link</a>
        </li>
    </ul>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <button class="btn btn-success">Hello</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
