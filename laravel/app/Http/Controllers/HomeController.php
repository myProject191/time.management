<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function home(){
        $user_id = Auth::id();
        // $tasks = Task::where('user_id',$user_id) -> get();
        $categories = Category::where('user_id',$user_id) -> get();

        $tasks = \DB::table('tasks')
            ->select('tasks.id','tasks.start_time','tasks.finish_time','categories.name')
            ->where('tasks.user_id',$user_id)
            ->leftJoin('categories','tasks.category_id','=','categories.id')
            ->get();

        return view('/home',['tasks' => $tasks,'categories' => $categories]);
    }

    public function task_send(Request $request){
        
        $user_id = Auth::id();
        $category_id = Category::where('name',$request->category_name2)->value('id');

        $task = new Task;
        $task->start_time = $request->input('start_time');
        $task->finish_time = $request->input('finish_time');
        $task->category_id = $category_id;
        $task->user_id = $user_id;
        $task->save();

        return redirect('/home');

    }

    public function category_register(Request $request){
        $user_id = Auth::id();

        $category = new Category;
        $category->name = $request->input('category_name');
        $category->user_id = $user_id;
        $category->save();

        return redirect('/home');
    }
}
