<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;


class HomeGraphController extends Controller
{
    public function send2Home1day(){
        $user_id = Auth::id();
        $today = date("Y-m-d");
        $tasks = \DB::table('tasks')
            ->select('tasks.id','tasks.start_time','tasks.finish_time','categories.name')
            ->where('tasks.user_id',$user_id)
            ->whereDate('tasks.start_time',$today)
            ->leftJoin('categories', 'tasks.category_id', '=', 'categories.id')
            ->get();

            // log::で値をみることができる

            \Log::info($tasks);


        // return json_encode([
        //     [
        //         'id' => $tasks->id,
        //         'start' => $tasks->start_time,
        //         'end' => $tasks->finish_time,
        //         'category' => $tasks->name,
        //     ]
        // ]);

        return ($tasks);
    }
}
