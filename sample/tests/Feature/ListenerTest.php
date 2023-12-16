<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use App\Listeners\RegisteredListener;

class ListenerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_listener(): void
    {
        Event::fake();

        Event::assertListening(
            Registered::class,
            RegisteredListener::class
        );
    }

    public function test_construct(): void
    {   
        $user = array(
            'name'  =>  'listener',
            'email' =>  'listen@listen.com',
            'password'  =>  'q1w2e3r4',
        );

        $this->mock(\Illuminate\Contracts\Broadcasting\Factory::class)
        ->shouldReceive('event')
        ->with(Registered::class)
        ->once();
    }

}
