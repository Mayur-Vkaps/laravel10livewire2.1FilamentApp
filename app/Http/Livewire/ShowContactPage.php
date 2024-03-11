<?php

namespace App\Http\Livewire;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ShowContactPage extends Component
{

    public $name,$email,$message;

    public function resetFields(){
        $this->name = '';
            $this->email='';
            $this->message= null;
    }

    public function updated(){
        $this->validate([
            'name'=>'required|min:3',
            'email'=>'required|email',
            'message'=>'required',
        ]);

    }

    public function submit(){

        $this->updated();

        $mailData =[
            'subject'=>'You have receive an contact Mail!',
            'name'=>$this->name,
            'email'=>$this->email,
            'message'=>$this->message,
        ];

        Mail::to('mayurthakur2010@gmail.com')->send(new ContactMail($mailData));
        session()->flash('success','Thank  u for contacting Us!');
        $this->resetFields();

    }
    public function render()
    {
        return view('livewire.show-contact-page');
    }
}
