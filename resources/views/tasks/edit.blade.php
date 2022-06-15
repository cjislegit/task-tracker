@extends('layouts.layout')

@section('content')
<div class="container">
<form action="">
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" id="title" class="form-control" value="{{$task->title}}">
    </div>
    <div class="mb-3">
        <label class="form-label" for="status">Task Status</label>
        <select class="form-select form-select" aria-label=".form-select-sm example" id="status">
            <option {{$task->status === 'complete' ? 'selected' : null}} value="complete">Complete</option>
            <option {{$task->status === 'progress' ? 'selected' : null}} value=progress">In Progress</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="taskDescription" class="form-label"> Task Description</label>
        <textarea name="taskDescription" id="taskDescription" cols="30" rows="10" class="form-control">{{$task->description}}</textarea>
    </div>
</form>
</div>
@endsection