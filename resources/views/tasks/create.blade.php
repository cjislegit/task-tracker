@extends('layouts.layout')

@section('content')
<div class="container">
    <form method="POST" action="/tasks">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input name="title" type="text" id="title" class="form-control" value="">
        </div>
        <div class="mb-3">
            <label class="form-label" for="status">Task Status</label>
            <select name="status" class="form-select form-select" aria-label=".form-select-sm example" id="status">
                <option value="in progress">In Progress</option>
                <option value="complete">Complete</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="taskDescription" class="form-label"> Task Description</label>
            <textarea name="description" id="taskDescription" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-dark float-end">Submit</button>
    </form>
</div>
@endsection