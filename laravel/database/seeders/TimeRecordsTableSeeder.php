<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TimeRecord;


class TimeRecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        TimeRecord::create([
            'start_time' => '2021-10-10 00:00:00',
            'finish_time' => '2021-10-11 05:00:00',
            'category_id' => '1',
            'user_id' => '1' 
        ],[
            'start_time' => '2021-11-10 00:00:00',
            'finish_time' => '2021-11-11 05:00:00',
            'category_id' => '3',
            'user_id' => '3' 
        ],[
            'start_time' => '2021-11-14 00:00:00',
            'finish_time' => '2021-11-14 05:00:00',
            'category_id' => '3',
            'user_id' => '3' 
        ]);

    }
}
