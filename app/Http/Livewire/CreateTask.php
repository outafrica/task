<?php

namespace App\Http\Livewire;

use App\Models\Task;
use LivewireUI\Modal\ModalComponent;

class CreateTask extends ModalComponent
{
    public $name;

    // rules for task creation
    protected $rules = [
        'name' => 'required',
    ];

    public function render()
    {
        // return modal view for create task
        return view('livewire.create-task');
    }

    public function createTask()
    {
        // validate input
        $this->validate();

        // get count of all tasks define the new task's priority
        $task_count = Task::all()->count();

        // define the array record for the new task
        $task = array(
            'name' => $this->name,
            // incremenet task count to be new task's priority
            'priority' => $task_count + 1
        );

        // create task
        Task::create($task);

        // close modal
        $this->closeModal();
    }
}
