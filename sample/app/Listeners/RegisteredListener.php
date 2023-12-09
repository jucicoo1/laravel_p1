<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\mail\Mailer;
use App\Models\User;
use Illuminate\Support\Facades\Mail;


class RegisteredListener
{
    private $eloquent;
    /**
     * Create the event listener.
     */
    public function __construct(User $eloquent)
    {
        $this->eloquent = $eloquent;
    }

    /**
     * Handle the event.
     */
    public function handle(Registered $event): void
    {
        $user = $this->eloquent->findOrFail($event->user->getAuthIdentifier());
        Mail::raw('User registration completed.', function($message) use ($user){
            $message->subject('User registration mail')->to($user->email);
        });
    }
}
