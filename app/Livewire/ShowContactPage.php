<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;
use PhpParser\Node\Expr\AssignOp\Concat;

class ShowContactPage extends Component
{       
    public $name = '';
    public $number = '';
    public $email = '';
    public $message = '';

    protected $rules =[
        'name'=> 'required',
        'number'=> 'required',
        'email'=> 'required|email',
        

    ];
    
    public function submit(){
        $this->validate();
        Contact::insert([
            'name'=> $this->name,
            'number'=> $this->number,
            'email'=> $this->email,
            'message'=>$this->message,

            

        ]);
       
        session(null)->flash('success', 'Thanks for contacting us, we will get back to you soon');
        $this->redirect('/contact');

    }

    public function render()
    {
        return view('livewire.show-contact-page');
    }
}
