<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MailContact extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $email;
    public $phone;
    public $message;
    public $type;

    /**
     * Create a new message instance.
     */
    public function __construct($name, $email, $phone, $message, $type)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->message = $message;
        $this->type = $type;

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->type,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'Email',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
