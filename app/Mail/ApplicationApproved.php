<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ApplicationApproved extends Mailable
{
    use Queueable, SerializesModels;

    public $user; // Make user data available in view

    /**
     * Create a new message instance.
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('तपाईंको आवेदन स्वीकृत भयो - प्रवेशपत्र डाउनलोड गर्नुहोस्')
                    ->markdown('emails.application_approved')
                    ->with([
                        'user' => $this->user,
                    ]);
    }
}
