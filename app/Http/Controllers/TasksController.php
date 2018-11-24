<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{

  protected $task;

  public function __construct(Task $task){
    $this->task = $task;
  }

  public function index()
  {
    $tasks = $this->task->all();
    return view('tasks.index', ['tasks' => $tasks]);
  }

  public function show($id)
  {
    $task = $this->task->where('id', $id)->first();
    return view('tasks.show', ['task' => $task]);
  }
}
