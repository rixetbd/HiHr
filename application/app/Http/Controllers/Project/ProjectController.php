<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('projects.projects');
    }

    public function tasks()
    {
        return view('projects.tasks');
    }

    public function task_board()
    {
        return view('projects.task-board');
    }
}
