<?php

namespace App\Http\Livewire;

use App\Models\Task;
use LivewireUI\Modal\ModalComponent;


class DeleteTask extends ModalComponent
{
    // global selected task variable
    public $selectedTask;


    public function mount($task)
    {
        // assign task to global selected task
        $this->selectedTask = $task;
    }

    public function render()
    {
        // return modal view for delete task
        return view('livewire.delete-task');
    }

    public function deleteTask()
    {
        // delete task where the selectedtask exists
        Task::where('id', $this->selectedTask['id'])->delete();

        // close delete task modal
        $this->closeModal();
    }
}
