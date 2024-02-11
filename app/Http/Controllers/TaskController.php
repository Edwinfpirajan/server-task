<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    // 
    public function index()
    {
        $tasks = Task::all();
        return response()->json($tasks);
    }

    // 
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $task = Task::create($validator->validated());

        return response()->json('Tarea creada con éxito', 201);
    }

    // 
    public function show($id)
    {
        $task = Task::find($id);

        if (is_null($task)) {
            return response()->json('Tarea no encontrada', 404);
        }

        return response()->json($task);
    }

    // 
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $task = Task::find($id);

        if (is_null($task)) {
            return response()->json('Tarea no encontrada', 404);
        }

        $task->update($validator->validated());

        return response()->json($task);
    }

    // 
    public function destroy($id)
    {
        $task = Task::find($id);

        if (is_null($task)) {
            return response()->json('Tarea no encontrada', 404);
        }

        $task->delete();

        return response()->json('Tarea eliminada con éxito', 200);
    }
}
