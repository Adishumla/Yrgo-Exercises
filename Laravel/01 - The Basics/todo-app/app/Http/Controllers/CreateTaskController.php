<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class CreateTaskController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        $data = $request->validate([
            'description' => ['required', 'string', 'min:10',]
        ]);

        $task = new Task();
        $task->description = $data['description'];

        $task->user_id = auth()->id();
        $task->save();


        return redirect()->intended('/dashboard');
    }
}
