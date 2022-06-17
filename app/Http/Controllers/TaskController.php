<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //Returns index file
    public function index()
    {
        //Querries for all records and retrieves them by date order
        $tasks = task::latest()->get();

        return view('tasks.index', [
            'tasks' => $tasks,
        ]);

    }

    //Returns show file
    public function show($id)
    {
        //Finds record with the id entered and stores it is task var, if record does not exist a 404 page is served
        $task = task::findOrFail($id);
        return view('tasks.show', ['task' => $task]);

    }

    //Returns edit file
    public function edit($id)
    {
        $task = task::findOrFail($id);
        return view('tasks.edit', ['task' => $task]);
    }

    public function update(Request $req, $id)
    {
        $task = task::find($id);
        $task->title = $req->input('title');
        $task->description = $req->input('description');
        $task->status = $req->input('status');
        $task->update();
        return redirect(route('tasks.index'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store()
    {
        $task = new task();
        $task->title = request('title');
        $task->status = request('status');
        $task->description = request('description');
        $task->save();
        return redirect(route('tasks.index'))->with('mssg', 'Task Created');

    }

}