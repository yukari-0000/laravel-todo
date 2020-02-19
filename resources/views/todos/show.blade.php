@extends('layouts.app')
@section('content')

<h1 class="text-center">Todo Details</h1>

<div class="card">
    <div class="card-header">{{ $todo->title }}</div>
    <div class="card-body">
        <div>{{ $todo->content }}</div>
        <form action="{{ route('todos.delete',[$todo->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger float-right" value="Delete">
        </form>
        <a href=" {{ route('todos.edit',[$todo->id]) }}" class="btn btn-primary float-right mb-2 mr-3">Edit</a>

        <a href=" {{ route('Todos') }}" class="btn btn-secondary">Go Back</a>
    </div>
</div>



@endsection