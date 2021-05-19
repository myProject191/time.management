<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\TimeRecord;
use Illuminate\Support\Facades\Auth;


class MeasurementController extends Controller
{
    public function measurement(){

        $user_id = Auth::id();
        $categories = Category::where('user_id',$user_id) -> get();

        return view('/measurement',['categories' => $categories]);
    }

    public function measurement_send(Request $request){
        $user_id = Auth::id();
        $category_id = Category::where('name',$request->category_choice)->value('id');

        $time_record = new TimeRecord;
        $time_record->user_id = $user_id;
        $time_record->start_time = $request->input('start_time');
        $time_record->finish_time = $request->input('finish_time');
        $time_record->category_id = $category_id;
        $time_record->save();
    
        return redirect('/measurement');
    }
}
