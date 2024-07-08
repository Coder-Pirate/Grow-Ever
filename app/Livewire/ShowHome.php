<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Service;
use App\Models\Home;

class ShowHome extends Component
{   
    // public $homeId = null;

    // public function mount($id){
    //     $this->homeId =$id;
    // }
    

    public function render()
    {   
        $services = Service::orderBy('title','ASC')->get();
        $homes = Home::find(1);
        return view('livewire.show-home',['services'=>$services, 'homes'=>$homes]);
    }
}
