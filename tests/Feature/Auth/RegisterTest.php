<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /**
     * @test
     */
    public function guest_can_register()
    {
        $attributes = [
            'username' => $this->faker->userName,
            'email' => $this->faker->unique()->safeEmail,
            'password' => 'secret',
            'password_confirmation' => 'secret',
        ];

        $this->json('POST', 'api/register', $attributes)
            ->assertStatus(200)
            ->assertJsonStructure([
                'access_token',
                'token_type',
                'expires_in',
            ]);

        $this->assertDatabaseHas('users', [
            'username' => $attributes['username'],
            'email' => $attributes['email'],
        ]);
    }
}
