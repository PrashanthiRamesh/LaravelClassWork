<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
   
    public function create(Request $request){
        $task = new Task;
        $task->name = $request->name;
        $task->save();

        return $task;
    }

    public function viewAll(){

    }
}
