<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterControllerTest extends TestCase
{
    use RefreshDatabase;
    
    public function testIndex()
    {
        $response = $this->get(route('register'));

        $response->assertStatus(200)
            ->assertViewIs('auth.register');
    }
}