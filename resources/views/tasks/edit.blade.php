@extends('layouts.layout')

@section('content')
<div class="container">
    <form method="POST" action="/tasks/update/{{$task->id}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input name="title" type="text" id="title" class="form-control" value="{{$task->title}}">
        </div>
        <div class="mb-3">
            <label class="form-label" for="status">Task Status</label>
            <select name="status" class="form-select form-select" aria-label=".form-select-sm example" id="status">
                <option {{$task->status === 'complete' ? 'selected' : null}} value="complete">Complete</option>
                <option {{$task->status === 'in progress' ? 'selected' : null}} value="in progress">In Progress</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="taskDescription" class="form-label"> Task Description</label>
            <textarea name="description" id="taskDescription" cols="30" rows="10" class="form-control">{{$task->description}}</textarea>
        </div>
        <button type="submit" class="btn btn-dark float-end">Submit</button>
    </form>
</div>
@endsection