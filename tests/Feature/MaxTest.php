<?php

namespace Tests\Feature;


use Tests\TestCase;
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
    
    public function testLoginPageiscorrect()
    {
        $response= $this->get('/login');

        $response->assertStatus(200);
        $response->assertSee('Forgot Your Password?');
    }

    public function testRegisterPageiscorrect()
    {
        $response= $this->get('/register');

        $response->assertStatus(200);
        $response->assertSee('Register');
    
    }

    public function testHomePageiscorrect()
    {
        $response= $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('About');
        $response->assertSee('Services');
    
    }

    public function testAuthenticationWorking()
    {
        $response=$this->get('/student')
        ->assertRedirect('/login');  
    }
}