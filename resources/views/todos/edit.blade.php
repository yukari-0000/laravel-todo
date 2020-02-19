@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header">Edit Todo</div>

    <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-group">
                        @foreach($errors->all() as $error)
                            <li class="list-group-item">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action ="{{ route('todos.update',[$todo->id])}}"  method="post">
                @csrf
                {{-- Form method spoofing --}}
                @method('PUT')
                <div class="form-group">
                    <input type="text" name="title" class="form-control" placeholder="Please enter your todos here" value="{{ $todo->title }}">
                </div>
                <div class="form-group">
                    <textarea name="content" id="" cols="30" rows="10" class="form-control" placeholder="Enter your todos content">{{ $todo->content }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-success">Update Todo</button>
                </div>    
            </form>    
    </div>
</div>
</div>
@endsection