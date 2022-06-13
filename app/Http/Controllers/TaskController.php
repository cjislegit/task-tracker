<?php

namespace App\Http\Controllers;

class TaskController extends Controller
{
    //Returns index file
    public function index()
    {
        return view('tasks.index');

    }

}