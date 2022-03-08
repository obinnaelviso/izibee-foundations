<?php

namespace App\Http\Livewire;

use App\Mail\DonationMailAdmin;
use App\Mail\DonationMailClient;
use Illuminate\Support\Facades\Mail;
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

    protected $listeners = ['paystackSummary', 'bankTransferSummary'];

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

    public function paystackSummary($reference) {
        $this->notifyClient();
        $this->notifyAdmin($reference);
        session()->flash("success", "Donation form submitted successfully!");
        return redirect()->route('donation');
    }

    public function bankTransferSummary() {
        $this->notifyClient();
        $this->notifyAdmin();
        session()->flash("success", "Donation form submitted successfully!");
        return redirect()->route('donation');
    }

    public function submitDonation() {
        $this->validate();
        $paymentDetails = [
            "amount" => $this->amount ? (int) $this->amount : $this->other_amount,
            "email" => $this->email
        ];
        if ($this->payment_method == "paystack") {
            $this->emit('pay-paystack', $paymentDetails);
        } else {
            $this->emit('pay-bank-transfer', $paymentDetails);
        }
    }

    protected function notifyClient() {
        if ($this->payment_method == "bank-transfer") {
            $description = "We are currently processing your bank transfer payment.";
        } else {
            $description = "We have successfully received your payment, and we say thank you very much.";
        }
        try {
            Mail::to($this->email)->send(new DonationMailClient($this->name, $this->amount ? $this->amount : $this->other_amount, $description));
        } catch(\Throwable $e) {}
    }

    protected function notifyAdmin($reference = null) {
        try {
            Mail::to(config('mail.from.address'))->send(new DonationMailAdmin([
                "name" => $this->name,
                "email" => $this->email,
                "campaign" => $this->campaign,
                "campaign_news" => $this->campaign_news,
                "amount" => (int) $this->amount ? $this->amount : $this->other_amount,
                "recurring_payment" => $this->recurring_payment,
                "payment_method" => $this->payment_method,
                "reference" => $reference
            ]));
        } catch (\Throwable $th) {}
    }

    public function render()
    {
        return view('livewire.donation-form');
    }
}
