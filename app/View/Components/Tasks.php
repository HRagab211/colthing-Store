<?php

namespace App\View\Components;

use App\Models\Task;
use Illuminate\View\Component;

class Tasks extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $tasks=Task::all();
        return view('components.tasks',compact('tasks'));
    }
}
