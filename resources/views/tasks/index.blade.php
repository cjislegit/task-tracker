@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($tasks as $task)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$task->title}}</h5>
                    <p class="card-text">{{$task->description}}</p>
                    <span class="card-text">{{$task->status}}</span>
                    <span class="card-text">{{$task->dueDate}}</span>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection