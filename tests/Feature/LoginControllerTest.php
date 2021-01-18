<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginControllerTest extends TestCase
{
    use RefreshDatabase;
    
    public function testIndex()
    {
        $response = $this->get(route('login'));

        $response->assertStatus(200)
            ->assertViewIs('auth.login');
    }
}