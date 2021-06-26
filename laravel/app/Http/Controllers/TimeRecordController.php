<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TimeRecord;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class TimeRecordController extends Controller
{
    public function send2Gantt(){
        $user_id = Auth::id();
        $today = date("Y-m-d");
        $time_records = \DB::table('time_records as tr')
            ->select('tr.id', 'tr.start_time', 'tr.finish_time', 'categories.name as name')
            ->where('tr.user_id', $user_id)
            ->whereDate('tr.start_time',$today)
            ->leftJoin('categories', 'tr.category_id', '=', 'categories.id')
            ->get();
            //　元々はfirstではなくgetだった。

        // return json_encode([
        //     [
        //         'id' => $time_records->id,
        //         'start' => $time_records->start_time,
        //         'end' => $time_records->finish_time,
        //         'category' => $time_records->name,
        //     ]
        // ]);

        return($time_records);
    }

    public function record_edit($id){
        
        $user_id = Auth::id();
        $time_records = \DB::table('time_records as tr')
            ->select('tr.id', 'tr.start_time', 'tr.finish_time', 'categories.name as name')
            ->where('tr.user_id', $user_id)
            ->where('tr.id',$id)
            ->leftJoin('categories', 'tr.category_id', '=', 'categories.id')
            ->get();

        $categories = Category::where('user_id',$user_id) -> get();

        return view('/record_edit',['time_records' => $time_records,'categories' => $categories]);
    }

    public function record_edit_done(Request $request){

        $user_id = Auth::id();
        $category_id = Category::where('name',$request->input('trecord'))->value('id');

        $records = TimeRecord::where('user_id',$user_id)
               ->where('id',$request->input('record_id'))
               ->update([
                   'start_time'=>$request->input('start_time'),
                   'finish_time'=>$request->input('finish_time'),
                   'category_id'=>$category_id
               ]);

        return redirect('record');
    }

    public function record_delete(Request $request){
        $delete_task = TimeRecord::find($request->delete_record_id);
        $delete_task->delete();

        return redirect('record');
    }
    
}
