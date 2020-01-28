@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <div>
                        <a class="btn btn-success float-left" href="{{route('book.index')}}">[<-] Back</a>
                    </div>
                    <h3 class="m-auto  text-center">Book details</h3>
                </div>
            </div>

            <div class="card-body">
                <h4>{{$book->name}}</h4>
                <p>{{$book->description}}</p>
            </div>
        </div>
    </div>
@endsection
