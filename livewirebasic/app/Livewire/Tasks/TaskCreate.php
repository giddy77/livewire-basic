<?php

namespace App\Livewire\Tasks;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class TaskCreate extends Component
{
    #[Title('create-tasks')]//this is the title of the page
    //you can also chain the title to the view
    // same case applies to the layout to overwrite the one in the livewire config file

    public function render()
    {
        return view('livewire.tasks.task-create');
    }
}
