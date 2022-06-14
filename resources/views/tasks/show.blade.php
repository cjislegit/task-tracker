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
                        <div class="col">Due: {{$task->dueDate}}</div>
                        <div class="col">
                            <a href="" class="btn btn-outline-light float-end">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection