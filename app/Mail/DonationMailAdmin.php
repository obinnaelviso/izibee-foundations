<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DonationMailAdmin extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $donationDetails;
    public function __construct($donationDetails)
    {
        $this->donationDetails = $donationDetails;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Donation from '.config('app.name'))
                    ->markdown('emails.donation-email-admin', [
            'donationDetails' => $this->donationDetails,
        ]);
    }
}
