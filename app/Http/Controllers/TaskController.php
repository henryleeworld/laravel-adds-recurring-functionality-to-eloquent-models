<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Carbon\Carbon;

class TaskController extends Controller
{
    public function show() 
    {
        echo '今天的日期是：' . now()->toDateString() . PHP_EOL;
        // Task::first()->repeat()->weekly()->on(['sunday', 'monday', 'tuesday']);
        $tasksTotal = Task::whereOccurresBetween(
            Carbon::make('2023-05-01'),
            Carbon::make('2023-05-30')
        )->count();
        echo '符合 2023/5/1 ~ 2023/5/30 總數：' . $tasksTotal . PHP_EOL;
    }
}
