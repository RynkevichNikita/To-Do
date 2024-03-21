<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Http\Requests\CreateRequest;
use App\Http\Requests\UpdateRequest;

class TodoController extends Controller
{
    public function show() 
    {
        $todos = Todo::all();

        return view('show', [
            'todos' => $todos,
        ]);
    }

    public function create(CreateRequest $request) 
    {
        Todo::create([
            'todo' => $request->todo,
            'priority' => $request->priority,
            'deadline' => $request->deadline
        ]);

        return redirect()->route('show');
    }  
    
    public function edit(Request $request) 
    {
        $todo = Todo::find($request->id);

        return view('edit', [
            'todo' => $todo
        ]);
    }

    public function update(Request $request) 
    {
        $todo = Todo::find($request->id);

        if(isset($request->todo)) {
            $todo->todo = $request->todo;
        }

        if(isset($request->priority)) {
            $todo->priority = $request->priority;
        }

        if(isset($request->deadline)) {
            $todo->deadline = $request->deadline;
        }

        $todo->save();

        return redirect()->route('show');
    }

    public function delete(Request $request) 
    {
        Todo::find($request->id)->delete();

        return redirect()->route('show');
    }
}
