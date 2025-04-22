<?php

namespace App\Http\Controllers;

use App\Models\task;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = task::all();
        return view('tasks.index', ['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        Task::create($data);
        return redirect(route('task.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(task $task) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(task $task)
    {
        return view('tasks.edit', ['task' => $task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, task $task)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $task->is_completed = $request->has('is_completed') ? true : false;

        $task->update($data);
        return redirect(route('task.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(task $task)
    {
        $task->delete();
        return redirect(route('task.index'));
    }
}
