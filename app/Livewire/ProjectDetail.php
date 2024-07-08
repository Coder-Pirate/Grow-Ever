<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Component;

class ProjectDetail extends Component
{




    public $projectID = null;
    public function mount($id){
        $this->projectID = $id;
    }

    public function render()
    {
        $project = Project::select('projects.*','iteams.name as iteams_name')->leftJoin('iteams','iteams.id','projects.iteam_id')->findOrFail($this->projectID);
        return view('livewire.project-detail', ['project' => $project]);
    }
}


//     public function render()
//     {
//         return view('livewire.project-detail');
//     }
// }
