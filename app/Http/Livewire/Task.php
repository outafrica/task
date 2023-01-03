<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task as TaskModel;

class Task extends Component
{
    public function render()
    {
        // return modal view for tasks with tasks organised in ascending order of priority
        return view('livewire.task', [
            'tasks' => TaskModel::orderBy('priority', 'ASC')->get()
        ]);
    }

    public function updateOrder($list)
    {
        // update all tasks in order of new priority
        foreach ($list as $task) {
            TaskModel::find($task['value'])->update(['priority' => $task['order']]);
        }
    }
}
