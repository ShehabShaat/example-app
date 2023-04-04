<?php

use Illuminate\Console\View\Components\Task;
use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\DB;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\Task2Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    $name = 'Ahmed';
   // return view('about', ['name' => 'Ahmed']);
   // return view('about')->with(['name', $name]);
    return view('about',compact('name'));
});


Route::post('about', function () {
    $name = 'Ahmed';
    if(isset($_POST['name']))
        $name = $_POST['name'];
    return view('about',compact('name'));
});

// Route::get('tasks', function () {
//     $tasks = ['Task #1', 'Task #2', 'Task #3'];
//     return view('tasks', compact('tasks'));
// });

// Route::get('tasks', function () {
//     //$tasks = ['Task #1', 'Task #2', 'Task #3'];
//     $tasks = DB::table('tasks')->where('name','like','task1%')-> get();
//     return view('tasks', compact('tasks'));
// });


//     //$tasks = ['Task #1', 'Task #2', 'Task #3'];
//     $tasks = DB::table('tasks')->find($id);
//     return view('name');
// });

// Route::get(/)


Route::get('/tasks/{id}', [TaskController::class,'show']);
Route::get('/tasks', [Task2Controller::class,'index']);
// Route::get('tasks', 'TaskController@index');
Route::get('app',function(){
    return view(('layout.app'));
});


Route::get('taskPage',function(){
    return view(('taskPage'));
});
