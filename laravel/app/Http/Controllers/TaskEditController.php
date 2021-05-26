<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class TaskEditController extends Controller
{
    public function task_edit($id){

        $user_id = Auth::id();
        $tasks = \DB::table('tasks')
            ->select('tasks.id','tasks.start_time','tasks.finish_time','categories.name')
            ->where('tasks.user_id',$user_id)
            ->where('tasks.id',$id)
            ->leftJoin('categories', 'tasks.category_id', '=', 'categories.id')
            ->get();

        return view('/edit',['tasks' => $tasks]);
        
    }

    public function task_edit_done(Request $request){

        $user_id = Auth::id();
        $category_id = Category::where('name',$request->name)->value('id');
        
        $tasks = Task::where('user_id',$user_id)
               ->where('id',$request->input('task_id'))
               ->update([
                   'start_time'=>$request->input('start_time'),
                   'finish_time'=>$request->input('finish_time'),
                   'category_id'=>$category_id
               ]);

        $home_controller = app()->make('App\Http\Controllers\HomeController');
        $redirect = $home_controller->home();
        return ($redirect);
    }

}
