<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class TaskEditForm extends Component
{
    public $title, $description;

    public Task $task;

    protected $rules = [
        'title' => 'required',
        'description' => 'required|min:10'
    ];

    public function mount(){
        $this->title = $this->task->title;
        $this->description = $this->task->description;
    }

    public function update(){
        $this->validate();
        $this->task->update([
            'title' => $this->title,
            'description' => $this->description
        ]);
        
        session()->flash('tasks', 'Task successfully updated.');
        return redirect()->route('tasks.index')->with('success', 'Task aggiunta con successo!');
    }

    public function render()
    {
        return view('livewire.task-edit-form');
    }
}
