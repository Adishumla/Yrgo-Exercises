<?php

namespace Tests\Feature;


use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Tests\TestCase;
use App\Models\User;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_view_login_form()
    {
        $response = $this->get('/');
        $response->assertSeeText('Email');
        $response->assertStatus(200);
    }

    use RefreshDatabase;

    public function test_login_user()
    {
        $user = new User();
        $user->name = 'Henrik';
        $user->email = 'Henrik@yrgo.se';
        $user->password = '123';

        //following redirects
        $response = $this->followingRedirects()
            ->post(
                '/',
                [
                    'email' => $user->email,
                    'password' => $user->password
                ]
            )
            ->assertSeeText($user->name);
    }

    public function test_login_user_without_password()
    {
        $user = new User();
        $user->email = 'Sverker@yrgo.se';

        $response = $this->followingRedirects()
            ->post(
                '/',
                [
                    'email' => $user->email,
                ]
            )
            ->assertSeeText('The provided credentials do not match our records.');
    }
}
