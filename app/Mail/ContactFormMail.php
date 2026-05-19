<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Models\ContactEntry;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contactEntry;
    public $module;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contactEntry)
    {
        $this->contactEntry = $contactEntry;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = !empty($this->contactEntry->subject) ? setting('site_name') . ' ' . $this->contactEntry->subject : 'Contact Us Form Submission';
        return $this->view('mails.contact')
            ->subject($subject)
            ->from(setting('email_from'))
            ->with([
                'model' => $this->contactEntry
            ]);
    }
}
