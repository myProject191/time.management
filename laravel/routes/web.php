<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('./auth/login');
});

// Route::get('fetch_task_data', function() {
//     return json_encode([
//         [
//             'id' => 1,
//             'start' => '2020/05/08 12:00:00',
//             'end' => '2020/05/08 15:45:20',
//             'name' => 'sample'. Auth::id()
//         ]
//     ]);
// });


// vueのルート
Route::get('fetch_task_data','TimeRecordController@send2Gantt');

Route::get('fetch_task_data_2home1day','HomeGraphController@send2Home1day');


//ただviewを表示するようなルート
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/record', function () {
    return view('record');
})->name('record');


//Controllerに繋げるためのルート
Route::middleware(['auth:sanctum', 'verified'])->post('/task_send','HomeController@task_send')
->name('task_send');

Route::middleware(['auth:sanctum', 'verified'])->get('/home','HomeController@home')
->name('home');

Route::middleware(['auth:sanctum', 'verified'])->post('/category_register','HomeController@category_register')
->name('category_register');

Route::middleware(['auth:sanctum', 'verified'])->get('/measurement', 'MeasurementController@measurement')
->name('measurement');

Route::middleware(['auth:sanctum', 'verified'])->post('/measurement_send', 'MeasurementController@measurement_send')
->name('measurement_send');

Route::middleware(['auth:sanctum', 'verified'])->get('/task_edit/{id}', 'TaskEditController@task_edit')
->name('task_edit');

Route::middleware(['auth:sanctum', 'verified'])->post('/task_edit_done', 'TaskEditController@task_edit_done')
->name('task_edit_done');

Route::middleware(['auth:sanctum', 'verified'])->post('/task_delete', 'TaskEditController@task_delete')
->name('task_delete');
