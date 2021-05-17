<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;


class HomeController extends Controller
{
    public function home(){
        $user_id = Auth::id();
        $tasks = Task::where('user_id',$user_id) -> get();

        return view('/home',['tasks' => $tasks]);
    }
}
