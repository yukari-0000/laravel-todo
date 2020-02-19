@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header">Todos</div>

    <div class="card-body">
        <ul class="list-group">
            @foreach($todos as $todo)
                <li class="list-group-item">
                    {{ $todo->title }}
                    <a href="{{ route('todos.show',[$todo->id])}}" class="btn btn-primary float-right mr-2">View</a>
                    @if($todo->done)
                        <a href="{{ route('todos.not-completed',[$todo->id])}}" class="btn btn-success float-right mr-2">Done</a>
                    @else
                        <a href="{{ route('todos.completed',[$todo->id])}}" class="btn btn-danger float-right mr-2">Not Done</a>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
</div>
</div>


@endsection