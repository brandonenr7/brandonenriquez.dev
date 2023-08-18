<?php

namespace App\Livewire;

use App\Models\Project;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ProjectCard extends Component
{
    /**
     * The project instance.
     */
    public Project $project;

    /**
     * Render the component.
     */
    public function render(): View
    {
        return view('livewire.project-card');
    }
}
