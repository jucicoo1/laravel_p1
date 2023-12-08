<?php

namespace App\Providers\App\Listeners;

use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\mail\Mailer;
use App\Models\User;

use Illuminate\Support\Facades\Log;

log::debug('page called');

class RegisteredListener
{
    private $mailer;
    private $eloquent;
    /**
     * Create the event listener.
     */
    public function __construct(Mailer $mailer, User $eloquent)
    {
        log::debug('const called');
        $this->mailer   =   $mailer;
        $this->eloquent =   $eloquent;
    }

    /**
     * Handle the event.
     */
    public function handle(Registered $event)
    {
        log::debug('handler called');
        $user = $this->eloquent->findOrFail($event->user->getAuthIdentifier());
        $this->mailer->raw('User registration completed.', function($message) use ($user){
            $message->subject('User registration mail')->to($user->email);
        });
    }
}
