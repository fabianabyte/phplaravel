<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller{
    public function tasks(){    
        return Task::all();
    }
    public function store(Request $request){    
        $task = Task::create([
            'name'=>$request->input('name'),
            'complete'=>$request->input('complete')
        ]);
        return $task;
    }

    public function show(Task $task){
        return $task;
    }

    public function update(Request $request, Task $task){

        $task -> name = $request->input('name');
        $task -> complete = $request->input('complete');

        $task -> save();

        return $task;
    }

    public function delete(Task $task){

        $task -> delete();
        $task -> save();

        return response()->json(["destruido"=>"ok"]);
    }
}
