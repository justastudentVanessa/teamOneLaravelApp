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
    public function testUserFormBehaviors()
    {
        $this->visit('/user')
	     //->press('Edit')
	     //->press('Delete')
	     //->press('Add User')
	     ->click('Home')
	     ->click('Users')
	     ->click('Courses');
    }
}
