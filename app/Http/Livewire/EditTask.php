<?php

namespace App\Http\Livewire;

use App\Models\Task;
use LivewireUI\Modal\ModalComponent;


class EditTask extends ModalComponent
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
        // return modal view for edit task
        return view('livewire.edit-task');
    }

    public function updateTask()
    {
        // validate input
        $this->validate();

        // update task where the selectedtask exists
        Task::where('id', $this->selectedTask['id'])->update(array(
            'name' => $this->selectedTask['name']
        ));

        // close modal
        $this->closeModal();
    }

    protected function rules(): array
    {
        // define rules for selected task name
        return [
            'selectedTask.name' => 'required'
        ];
    }
}
