<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home(){
        // $user_id = Auth::id();
        $user_id = 1;
        $tasks = Task::where('user_id',$user_id) -> get();

        return view('/home',['tasks' => $tasks]);
    }
}
