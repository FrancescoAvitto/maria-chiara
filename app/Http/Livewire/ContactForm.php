<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    public $name;
    public $surname;
    public $email;
    public $phone;
    public $message;
    public $terms;
    public $emailSent = false;

    protected $rules = [
        'name' => 'required|min:4',
        'surname' => 'required|min:4',
        'email' => 'required|email',
        'phone' => 'numeric',
        'terms' => 'required'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function sendContactMail()
    {
        $this->validate();
        $name = $this->name;
        $surname = $this->surname;
        $email = $this->email;
        $phone = $this->phone;
        $message = $this->message;
        Mail::to('admin@unaltropaiodimaniche.it')->send(new ContactMail(compact('name', 'surname', 'email', 'phone', 'message')));
        $this->emailSent = true;
    }
    
    public function render()
    {
        return view('livewire.contact-form');
    }
}
