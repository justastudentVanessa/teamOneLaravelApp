<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserFormTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_User_Form()
    {
        $this->visit('/user')
	     //->click('Edit')
	     //->press('Delete')
	     //->press('Add User')
	     ->click('Login')//Link is "Logout" on screen. Test fails otherwise
	     ->click('Admin');
	     //->click('Administrator');
    }
}
