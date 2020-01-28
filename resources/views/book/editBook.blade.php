@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Edit Book</h3>
            </div>
            <div class="card-body">
                {!! Form::model($book, ['route' => ['book.update', $book->id]]) !!}
                {{method_field('PUT')}}
                    <div class="form-group">
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Book Name']) !!}
                    </div>
                <div class="form-group">
                    {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Book Description']) !!}

                    </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Updte">
                </div>
                {{Form::close()}}
            </div>
        </div>
    </div>
@endsection
