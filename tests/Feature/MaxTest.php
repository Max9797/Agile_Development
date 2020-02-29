<?php

namespace Tests\Feature;


use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use App\User;
use Laravel\Passport\Passport;
use Illuminate\Foundation\Testing\WithFaker;

class MaxTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    use RefreshDatabase;
    
    public function testLoginPageiscorrect()
    {
        $response= $this->get('/login');

        $response->assertStatus(200);
        $response->assertSee('Sign in to start');
    }

    public function testRegisterPageiscorrect()
    {
        $response= $this->get('/register');

        $response->assertStatus(200);
        $response->assertSee('Register a new membership');
        $response->assertSee('membership');
    }


    public function testuserLogin()
    {
        $response=$this->get('/home')
        ->assertRedirect('/login');  
    }
}