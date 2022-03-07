<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DonationMailClient extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $name;
    public $amount;
    public $description;
    public function __construct($name, $amount, $description)
    {
        $this->name = $name;
        $this->amount = $amount;
        $this->description = $description;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Thank you for successfully making a donation!")
                    ->markdown('emails.donation-mail-client', [
                        'name' => $this->name,
                        'amount' => $this->amount,
                        'message' => $this->description,
                    ]);
    }
}
