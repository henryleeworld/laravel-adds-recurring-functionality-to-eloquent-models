<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Support\Carbon;

class TaskController extends Controller
{
    public function show() 
    {
        echo __('Today\'s date is: ') . now()->toDateString() . PHP_EOL;
        Task::first()->repeat()->weekly()->on(['sunday', 'monday', 'tuesday']);
        $tasksTotal = Task::whereOccurresBetween(
            $startDate = Carbon::now()->startOfMonth(),
            $endDate = Carbon::now()->endOfMonth()
        )->count();
        echo __('The total tasks between :start_date and :end_date: ', ['start_date' => $startDate->toDateString(), 'end_date' => $endDate->toDateString()]) . $tasksTotal . PHP_EOL;
    }
}
