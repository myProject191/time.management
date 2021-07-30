<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public $timestamps = false;

    //変更していいものを入れる。
    // protected $fillable = ['start_time','finish_time','category_id','user_id'];

    //変更してはいけないものを入れる。
    protected $guarded = [];
}
