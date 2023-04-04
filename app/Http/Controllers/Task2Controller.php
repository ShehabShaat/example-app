<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Task2Controller extends Controller
{
    //

    public function index()
    {
        # code...

        $tasks = DB::table('tasks')->where('name','like','task%')-> get();
        return view('tasks', compact('tasks'));
    }

    public function show($id)
    {
        # code...
        $name = DB::table('tasks')->find($id);

        return view('name',compact('name'));
    }
}
