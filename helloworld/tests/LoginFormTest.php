<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginFormTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_Login_Page()
    {
        $this->visit('/login')
	     ->type('Email', 'email')
	     ->type('Password', 'password')
	     ->press('Login')
	     ->click('Login')
	     ->click('Register')
	     ->click('Admin')
	     ->click('Home');
    }
}
