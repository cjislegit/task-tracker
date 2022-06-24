@extends('layouts.layout')

@section('content')
    <div class="container py-4">
            <div class="p-5 mb-4 bg-dark rounded-3">
                <div class="container-fluid py-5 text-white">
                    <h1>{{$task->title}}</h1>
                    <p class="col-md-8 fs-4">
                        {{$task->description}}
                    </p>
                    <div class="row">
                        <div class="col">Status: {{$task->status}}</div>
                        <div class="col">
                            <form action="{{route('tasks.delete', $task->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-light float-end">Delete</button>
                            </form>
                            <a href="{{route('tasks.edit', $task->id)}}" class="btn btn-outline-light float-end me-2">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection