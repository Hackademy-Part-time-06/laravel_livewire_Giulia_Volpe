<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class TaskCreateForm extends Component
{

    public $title, $description;

    protected $rules = [
        'title' => 'required',
        'description' => 'required|min:10'
    ];

    public function store()
    {
        $this->validate();

        Task::create([
            'title' => $this->title,
            'description' => $this->description
        ]);


        session()->flash('tasks', 'Task successfully updated.');
        $this->reset(['title', 'description']);

        return redirect()->route('tasks.index')->with('success', 'Task aggiunta con successo!');
    }

    public function updated($propertyName) //real time validation
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.task-create-form');
    }
}
