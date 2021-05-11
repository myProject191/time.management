<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TimeRecord;
use Illuminate\Support\Facades\Auth;

class TimeRecordController extends Controller
{
    public function send2Gantt(){
        $user_id = Auth::id();
        $time_records = \DB::table('time_records as tr')
            ->select('tr.id', 'tr.start_time', 'tr.finish_time', 'categories.name as name')
            ->where('user_id', $user_id)
            ->leftJoin('categories', 'tr.category_id', '=', 'categories.id')
            ->get();

        return json_encode([
            [
                'id' => $time_records->id,
                'start' => $time_records->start_time,
                'end' => $time_records->finish_time,
                'category' => $time_records->name,
            ]
        ]);
    }
}
