<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeRecord extends Model
{
    use HasFactory;

    public $timestamps = false;

    // protected $fillable = ['start_time','finish_time','category_id','user_id'];
    protected $guarded = [];


}
