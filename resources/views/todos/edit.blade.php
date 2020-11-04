@extends('layouts.app')

@section('content')

    <h1 class="text-center my-5">Create Todos</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Edit todo</div>
                <div class="card-body">

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-group">
                                @foreach($errors->all() as $error)
                                    <li class="list-group-item">
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="post" action="/todos/{{ $todo->id }}/update-todos">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="name" value="{{ $todo->name }}"/>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="description" placeholder="description" id="" cols="30" rows="10">{{ $todo->description }}</textarea>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
