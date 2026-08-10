<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public array $contactData;

    /**
     * Create a new message instance.
     */
    public function __construct(array $contactData)
    {
        $this->contactData = $contactData;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $service = $this->contactData['subject'] ?? 'General Inquiry';
        $senderName = $this->contactData['name'] ?? 'Website Visitor';

        return new Envelope(
            from: new Address(
                config('mail.from.address', 'shubham18822@gmail.com'),
                config('mail.from.name', 'Webvire Technologies')
            ),
            replyTo: [
                new Address($this->contactData['email'], $senderName)
            ],
            subject: "[New Inquiry] {$senderName} - {$service} | Webvire Technologies",
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contact',
            with: [
                'contactData' => $this->contactData,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     */
    public function attachments(): array
    {
        return [];
    }
}
