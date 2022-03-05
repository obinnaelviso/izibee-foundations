<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DonationForm extends Component
{
    public $name, $email, $campaign_news;
    public $campaign = "";
    public $amount = 5000;
    public $other_amount = 1000;
    public $recurring_payment = "";
    public $payment_method = "bank-transfer";
    public $processingPayment = false;
    public $sumAmount;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'campaign' => 'required',
        'campaign_news' => 'required',
        'amount' => 'nullable|numeric|min:1000',
        'other_amount' => 'numeric|min:1000',
        'recurring_payment' => 'required',
    ];

    public function updated($propertyName) {
        $this->validateOnly($propertyName);
    }

    public function saveDonation() {
        $this->validate();
    }

    public function render()
    {
        return view('livewire.donation-form');
    }
}
