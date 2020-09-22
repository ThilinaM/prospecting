<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Task;
use Illuminate\Support\Facades\Auth;

class TasksCalendarController extends Controller
{
    public function index()
    {
        if(Auth()->user()->isAdmin){
        $events = Task::whereNotNull('due_date')->get();

        return view('admin.tasksCalendars.index', compact('events'));
        }else {
            $user = Auth::user();
            $events = Task::whereNotNull('due_date')->where('assigned_to_id','=', $user->id)
            ->where('status_id','!=', '3')->get();
           
            return view('admin.tasksCalendars.index', compact('events'));
        }
    }
}
