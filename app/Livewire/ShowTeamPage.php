<?php

namespace App\Livewire;

use App\Models\Membar;
use Livewire\Component;

class ShowTeamPage extends Component
{
    public function render()
    {
        $membars = Membar::orderBy('name','ASC')->get()->where('status',1);
        // dd($membars);
        return view('livewire.show-team-page',['membars'=>$membars]);
    }
}
