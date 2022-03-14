<?php

namespace App\Http\Livewire;

use App\Mail\VolunteerMailAdmin;
use App\Mail\VolunteerMailClient;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class VolunteerForm extends Component
{
    public $name, $email, $address, $state, $nationality, $lga, $phone, $facebook,
            $phone_2, $gender, $occupation, $marital_status, $dob, $qualification,
            $twitter, $instagram, $ngo_name, $volunteer_reason, $kin_name, $kin_gender,
            $kin_marital_status, $kin_state, $kin_lga, $kin_relationship, $kin_nationality,
            $kin_address, $kin_phone, $kin_email;

    public $convicted = 'no';

    public $worked_with_ngo = 'no';

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
        'volunteer_reason' => 'required',
        'kin_name' => 'required',
        'kin_gender' => 'required',
        'kin_marital_status' => 'required',
        'kin_state' => 'required',
        'kin_lga' => 'required',
        'kin_relationship' => 'required',
        'kin_nationality' => 'required',
        'kin_address' => 'required',
        'kin_phone' => 'required',
        'convicted' => 'required'
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
                "phone_2" => $this->phone_2,
                "gender" => $this->gender,
                "occupation" => $this->occupation,
                "lga" => $this->lga,
                "marital_status" => $this->marital_status,
                "dob" => $this->dob,
                "facebook" => $this->facebook,
                "ngo_name" => $this->ngo_name,
                "twitter" => $this->twitter,
                "instagram" => $this->instagram,
                "worked_with_ngo" => $this->worked_with_ngo,
                "volunteer_reason" => $this->volunteer_reason,
                "kin_name" => $this->kin_name,
                "kin_gender" => $this->kin_gender,
                "kin_marital_status" => $this->kin_marital_status,
                "kin_state" => $this->kin_state,
                "kin_lga" => $this->kin_lga,
                "kin_relationship" => $this->kin_relationship,
                "kin_nationality" => $this->kin_nationality,
                "kin_address" => $this->kin_address,
                "kin_phone" => $this->kin_phone,
                "kin_email" => $this->kin_email,
                "convicted" => $this->convicted,
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
