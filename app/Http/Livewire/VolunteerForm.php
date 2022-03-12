<?php

namespace App\Http\Livewire;

use App\Mail\VolunteerMailAdmin;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class VolunteerForm extends Component
{
    public $name, $email, $address, $city, $state, $country, $phone,
            $phone_2, $facebook, $instagram, $shirt_size, $occupation,
            $workplace, $dob, $reason;
    public $impromptu = "no";

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'address' => 'required',
        'city' => 'required',
        'state' => 'required',
        'country' => 'required',
        'phone' => 'required',
        'shirt_size' => 'required',
        'occupation' => 'required',
        'impromptu' => 'required',
        'workplace' => 'required',
        'dob' => 'required',
        'reason' => 'required',
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
                "city" => $this->city,
                "state" => $this->state,
                "country" => $this->country,
                "phone" => $this->phone,
                "shirt_size" => $this->shirt_size,
                "occupation" => $this->occupation,
                "impromptu" => $this->impromptu,
                "workplace" => $this->workplace,
                "dob" => $this->dob,
                "reason" => $this->reason,
                "facebook" => $this->facebook,
                "phone_2" => $this->phone_2,
                "instagram" => $this->instagram,
            ]));
        } catch (\Throwable $th) {}
        session()->flash("success", "Volunteer form submitted successfully! We'll get back to you shortly.");
        return redirect()->route('volunteer-register');
    }

    public function render()
    {
        return view('livewire.volunteer-form');
    }
}
