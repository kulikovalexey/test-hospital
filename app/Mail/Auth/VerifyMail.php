<?php

namespace App\Mail\Auth;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Entity\User\User;

class VerifyMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $user;

    /**
     * VerifyMail constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Email verification')
            ->markdown('emails.auth.register.confirm', ['user' => $this->user]);
    }
}
