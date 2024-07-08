<?php

namespace App\Livewire;

use App\Models\Iteam;
use App\Models\Project;
use Livewire\Component;
use Livewire\Attributes\Url;

class ShowProject extends Component
{
    #[Url]
    public $iteamSlug=null;

    public function render()
    {   

        $iteams = Iteam::all();

        if(!empty($this->iteamSlug)){
            $iteam = Iteam::where('slug',$this->iteamSlug)->first();

            if(empty($iteam)){
                abort(404);
            }

            $projects = Project::orderBy('created_at','DESC')->where('iteam_id', $iteam->id)->where('status',1)->paginate(4);
        }else{
            $projects = Project::orderBy('created_at','DESC')->where('status',1)->paginate(4);
        }

        $latestProjects = Project::orderBy('created_at','DESC')->where('status',1)->get()->take(3);


        



        
        return view('livewire.show-project', ['projects'=>$projects, 'iteams'=> $iteams,'latestProjects'=> $latestProjects]);
    }





    // public function render()
    // {
    //     return view('livewire.show-project');
    // }
}
