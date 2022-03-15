<?php

namespace App\Http\Livewire;

use App\Mail\ContactMailAdmin;
use App\Mail\ContactMailClient;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $name, $subject, $message, $email;

    protected $rules = [
        'name' => 'required',
        'subject' => 'required',
        'message' => 'required',
        'email' => 'required|email',
    ];

    public function render()
    {
        return view('livewire.contact-form');
    }

    public function updated($propertyName) {
        $this->validateOnly($propertyName);
    }

    public function submitContact() {
        $this->validate();
        try {
            Mail::to(config('mail.from.address'))->send(new ContactMailAdmin([
                "name" => $this->name,
                "subject" => $this->subject,
                "message" => $this->message,
                "email" => $this->email,
            ]));
            Mail::to($this->email)->send(new ContactMailClient);
        } catch (\Throwable $th) {
            //throw $th;
        }
        return redirect()->route('contact');
    }
}
