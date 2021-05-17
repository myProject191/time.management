<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;


class MeasurementController extends Controller
{
    public function measurement(){

        $user_id = Auth::id();
        $categories = Category::where('user_id',$user_id) -> get();

        return view('/measurement',['categories' => $categories]);
    }
}
