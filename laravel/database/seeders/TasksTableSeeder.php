<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// Models\Taskを使うとここで表記する。
use App\Models\Task;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Task::create([
            'start_time' => '2021-10-10 00:00:00',
            'finish_time' => '2021-10-11 05:00:00',
            'category_id' => '1',
            'user_id' => '1'
        ]);
    }
}
