<?php

namespace App\Http\Livewire;

use App\Mail\VolunteerMailAdmin;
use App\Mail\VolunteerMailClient;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class VolunteerForm extends Component
{
    public $name, $email, $address, $state, $nationality, $lga, $phone,
            $phone_2, $gender, $occupation, $marital_status, $dob, $qualification;

    protected $rules = [
        'name' => 'required',
        'dob' => 'required',
        'nationality' => 'required',
        'state' => 'required',
        'email' => 'required|email',
        'lga' => 'required',
        'marital_status' => 'required',
        'address' => 'required',
        'phone' => 'required',
        'gender' => 'required',
        'occupation' => 'required',
        'qualification' => 'required',
    ];

    public function updated($propertyName) {
        $this->validateOnly($propertyName);
    }

    public function submitVolunteer() {
        $this->validate();
        try {
            Mail::to(config('mail.from.address'))->send(new VolunteerMailAdmin([
                "name" => $this->name,
                "email" => $this->email,
                "address" => $this->address,
                "qualification" => $this->qualification,
                "state" => $this->state,
                "nationality" => $this->nationality,
                "phone" => $this->phone,
                "gender" => $this->gender,
                "occupation" => $this->occupation,
                "lga" => $this->lga,
                "marital_status" => $this->marital_status,
                "dob" => $this->dob,
                "phone_2" => $this->phone_2,
            ]));
            Mail::to($this->email)->send(new VolunteerMailClient);
        } catch (\Throwable $th) {}
        session()->flash("success", "Volunteer form submitted successfully! We'll get back to you shortly.");
        return redirect()->route('volunteer-register');
    }

    public function render()
    {
        return view('livewire.volunteer-form');
    }
}
