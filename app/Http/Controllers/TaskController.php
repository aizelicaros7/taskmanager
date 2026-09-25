<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display all tasks.
     */
    public function index()
    {
        $tasks = Task::latest()->get();
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form to create a new task.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Save a new task to the database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'task_name'   => 'required|string|max:255',
            'description' => 'nullable|string',
            'due_date'    => 'nullable|date',
        ]);

        Task::create([
            'task_name'   => $request->task_name,
            'description' => $request->description,
            'status'      => 'Pending',
            'due_date'    => $request->due_date,
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task added successfully!');
    }

    /**
     * Quickly mark a task as completed.
     */
    public function markCompleted(Task $task)
    {
        $task->update(['status' => 'Completed']);

        return redirect()->route('tasks.index')->with('success', 'Task marked as completed!');
    }

    /**
     * Show a single task (not required by spec, but useful).
     */
    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    /**
     * Show the form to edit an existing task.
     */
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update an existing task.
     */
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'task_name'   => 'required|string|max:255',
            'description' => 'nullable|string',
            'status'      => 'required|in:Pending,Completed',
            'due_date'    => 'nullable|date',
        ]);

        $task->update([
            'task_name'   => $request->task_name,
            'description' => $request->description,
            'status'      => $request->status,
            'due_date'    => $request->due_date,
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully!');
    }

    /**
     * Delete a task.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully!');
    }
}