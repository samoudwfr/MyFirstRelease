@extends('layouts.app')

@section('content')
    <div class="container">


        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h3 class="m-auto  text-center">List of Books</h3>
                    <div>
                        <a class="btn btn-success float-right" href="{{route('book.create')}}">[+] Add Book</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Book Name</th>
                            <th>Book Description</th>
                            <th>Date</th>
                            <th>Modify</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($books as $book)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$book->name}}</td>
                            <td>{{$book->description}}</td>
                            <td>{{$book->created_at}}</td>
                            <td>
                                <a href="{{route('book.show', $book->id)}}">View</a> /
                                <a href="{{route('book.edit', $book->id)}}">Edit</a> /
                                <form action="{{route('book.destroy', $book->id)}}" method="POST">
                                    {{method_field("delete")}}
                                    @csrf
                                    <input type="submit" value="Delete">
                                </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
