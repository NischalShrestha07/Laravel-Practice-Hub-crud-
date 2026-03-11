<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('tasks.index', compact('tasks'));
        // return Task::all();
    }
    public function create()
    {
        $tasks = Task::all();
        return view('tasks.create', compact('tasks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
        ]);
        $task = new Task();
        $task->title = $request->title;
        $task->description = $request->description;
        $task->save();
        // return response()->json($task);
        return redirect()->route('tasks.index');
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }


    public function update(Task $task, Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
        ]);
        $task->update([
            'title' => $request->title,
            'description' => $request->description,
            'is_completed' => $request->is_completed ? true : false,
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully');
    }
    public function destroy(Task $task, Request $request)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');
    }

    public function restored($id)
    {
        $task = Task::withTrashed()->findOrFail($id);
        $task->restore();
        return redirect()->back();
    }
}
