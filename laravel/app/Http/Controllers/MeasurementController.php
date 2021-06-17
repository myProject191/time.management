<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\TimeRecord;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class MeasurementController extends Controller
{
    public function measurement(){

        $user_id = Auth::id();
        $categories = Category::where('user_id',$user_id) -> get();

        $record = \DB::table('time_records')
            ->select('time_records.id','time_records.start_time','time_records.finish_time','categories.name')
            ->where('time_records.user_id',$user_id)
            ->orderBy('time_records.id','desc')
            ->leftJoin('categories','time_records.category_id','=','categories.id')
            ->first();

        if($record->finish_time == null){
            return view('/measurement1',['record' => $record]);
        }else{
            return view('/measurement',['categories' => $categories]);
        }
    }

    public function measurement_send(Request $request){
        $user_id = Auth::id();
        $category_id = Category::where('name',$request->category_choice)->value('id');

        $time_record = new TimeRecord;
        $time_record->user_id = $user_id;
        $time_record->state = 'Active';
        $time_record->start_time = Carbon::now();
        $time_record->category_id = $category_id;
        $time_record->save();

       
        $record = \DB::table('time_records')
            ->select('time_records.id','time_records.start_time','categories.name')
            ->where('time_records.user_id',$user_id)
            ->orderBy('time_records.id','desc')
            ->leftJoin('categories','time_records.category_id','=','categories.id')
            ->first();
        
        // return view('/measurement1',['record' => $record]);

        return redirect('measurement1');

        // $st = $record->start_time;
        // $record->start_time = substr($st, -8 , 5);
    

        //return view ::viewを返す
        //return redirect ::URLに遷移する
    }

    public function measure_record(Request $request){
        $user_id = Auth::id();
        
        
        $time_record = TimeRecord::where('user_id',$user_id)
        ->where('id',$request->input('record_id'))
        ->update([
            'finish_time' => Carbon::now(),
            ]);
            return redirect('measurement2');
        }
        
    public function measurement2(){
            
        $user_id = Auth::id();

        $record = \DB::table('time_records')
        ->select('time_records.id','time_records.start_time','time_records.finish_time','categories.name')
        ->where('time_records.user_id',$user_id)
        ->orderBy('time_records.id','desc')
        ->leftJoin('categories','time_records.category_id','=','categories.id')
        ->first();
    
        $record->start_time = str_replace(" ","T",$record->start_time);
        $record->finish_time = str_replace(" ","T",$record->finish_time);

        return view('/measurement2',['record' => $record]);
    }



    public function measure_record3(Request $request){
        $user_id = Auth::id();
        $category_id = Category::where('name',$request->input('category'))->value('id');

        $time_record = TimeRecord::where('user_id',$user_id)
            ->where('id',$request->input('record_id'))
            ->update([
                'start_time' => $request->input('start_time'),
                'finish_time' => $request->input('finish_time'),
                'category_id' => $category_id
            ]);

        return redirect('measurement');
    }

}
