<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;

class LoginFormTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */	
    public function testLoginForm()
    {	
        $this->visit('/login')
	     ->type('Email', 'email')
	     ->type('Password', 'password')
	     ->press('Login')
	     ->click('Login')
	     ->click('Register')
	     ->click('Home');
    }

    /*public function testLoginValidation()
    {
	$user = User::create();

	$user->username = null;
	$this->assertFalse($user->validate(['username']));
    }*/
}
