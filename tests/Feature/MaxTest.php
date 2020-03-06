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
    
    public function LoginPageiscorrect()
    {
        $response= $this->get('/login');

        $response->assertStatus(200);
        $response->assertSee('Password');
    }

    public function RegisterPageiscorrect()
    {
        $response= $this->get('/register');

        $response->assertStatus(200);
    
    }


    public function userLogin()
    {
        $response=$this->get('/home')
        ->assertRedirect('/login');  
    }

    public function testFilterGender()
    {
        $response=$this->get('/search-prop/city/price/gender?city=bayan+lepas&price=200&gender=male');
        $response->assertStatus(200);
        $response->assertSee('male');

    }

    public function testFilterPrice()
    {
        $response=$this->get('/search-prop/city/price/gender?city=bayan+lepas&price=200&gender=male');
        $response->assertStatus(200);
        $response->assertSee('200');
    }

    public function testFilterCity()
    {
        $response=$this->get('/search-prop/city/price/gender?city=bayan+lepas&price=200&gender=male');
        $response->assertStatus(200);
        $response->assertSee('bayan lepas');
    }

}