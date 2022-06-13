<?php

namespace App\Http\Controllers;

use App\Models\task;

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

}