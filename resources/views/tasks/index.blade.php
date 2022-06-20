@extends('layouts.layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        @foreach ($tasks as $task)
                <div class="card">
                    <a class='text-black' href="{{route('tasks.show', $task->id)}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$task->title}}</h5>
                            <p class="card-text">{{$task->description}}</p>
                            <div class="row">
                                <div class="card-text col status">{{$task->status}}</div>
                            </div>
                        </div>
                    </a>
                </div>
        @endforeach
    </div>
</div>
@endsection