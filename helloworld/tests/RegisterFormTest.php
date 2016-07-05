<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegisterFormTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_Register_Form()
    {
        $this->visit('/register')
	     ->type('Name', 'name')
	     ->type('Username', 'username')
	     ->type('Phone Number', 'phonenumber')
	     ->type('Address', 'address')
	     ->type('E-Mail', 'email')
	     ->type('Password', 'password')
	     ->type('Confirm Password', 'password')
	     //On the type tests, "type" can be replaced with "select" or "attach" and the tests will still pass
	     ->press('Register')
	     ->click('Register')
	     ->click('Login')
	     ->click('Home')
	     ->click('Login')
	     ->click('Admin');
    }
}
