<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Event;

class CommandTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {

        Event::fake();

        $user = \App\Models\User::factory()->create();

        Event::assertDispatched(SendMail::class, function ($event) use ($user) {
            return $event->user->id == $user->id;
        });
    }
}
