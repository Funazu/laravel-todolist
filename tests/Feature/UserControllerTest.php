<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    public function testLoginPage() {
        $this->get('/login')
            ->assertSeeText("Login");
    }

    public function testLoginSucces() {
        $this->post('/login', [
            "user" => "naja",
            "password" => "12345678"
        ])->assertRedirect('/')
            ->assertSessionHas("user", "naja");
    }
}