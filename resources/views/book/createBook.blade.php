@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">[+] Add New Book</h3>
            </div>
            <div class="card-body">
                <form action="{{route('book.store')}}" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Book Name">
                    </div>
                    <div class="form-group">
                        <textarea type="text" class="form-control" name="description" id="description" placeholder="Book Description" ></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection
