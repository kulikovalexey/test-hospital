<?php

namespace App\UseCases\Auth;

use App\Entity\User\User;
use App\Mail\Auth\VerifyMail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Contracts\Mail\Mailer;
use App\Http\Requests\Auth\RegisterRequest;

class RegisterService
{
    /**
     * @var Mailer
     */
    private $mailer;
    /**
     * @var Dispatcher
     */
    private $dispatcher;

    /**
     * RegisterService constructor.
     * @param Mailer $mailer
     * @param Dispatcher $dispatcher
     */
    public function __construct(Mailer $mailer, Dispatcher $dispatcher)
    {
        $this->mailer = $mailer;
        $this->dispatcher = $dispatcher;
    }

    /**
     * @param RegisterRequest $request
     */
    public function register(RegisterRequest $request): void
    {
        $user = User::register(
            $request['email'],
            $request['password'],
            $request['first_name'],
            $request['middle_name'],
            $request['last_name'],
        );

        $this->mailer->to($user->email)->send(new VerifyMail($user));
        $this->dispatcher->dispatch(new Registered($user));
    }

    /**
     * @param $id
     */
    public function verify($id): void
    {
        /** @var User $user */
        $user = User::findOrFail($id);
        $user->verify();
    }
}
