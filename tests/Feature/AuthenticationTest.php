<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function a_user_can_register()
    {
        $response = $this->post('/register', [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'role' => 'User',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertStatus(302); // Redirect status
        $response->assertRedirect('/blogs/index');
        $this->assertAuthenticated();
    }
}
