<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;

class tasksController extends Controller
{
    public function startup(Request $request){
        return view('home', [
            'tasks' => Tasks::all(),
            'task_edit' => Tasks::find($request->GET('edit')),
            'task_edit' => Tasks::find($request->GET('delete')),
            'idTest' => $request->input('edit')
        ]);
    }


    public function store(Request $request){
        $formFields = $request->validate([
            'task' => ['required'],
        ]);

        $task = Tasks::create($formFields);

        return redirect('/');
    }

    function edit(Request $request, $id){
        $formField = $request->validate([
            'task' => ['required'],
        ]);
        $task = Tasks::find($id);
        $task->update($formField);
        return redirect('/');
    }

    function destroy($id){
        $task = Tasks::find($id);
        $task->delete();
        return redirect('/');
    }
}
