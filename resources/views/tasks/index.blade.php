@extends('layouts.layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        @foreach ($tasks as $task)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$task->title}}</h5>
                    <p class="card-text">{{$task->description}}</p>
                    <div class="row">
                        <div class="card-text col">{{$task->status}}</div>
                        <div class="card-text col text-end">{{date('m/d/y', strtotime($task->dueDate))}}</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection