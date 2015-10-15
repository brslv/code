<?php

include "User.php";
include "Profile.php";

class ProfileTest extends PHPUnit_Framework_TestCase
{
    private $user;

    public function setUp()
    {
        $this->user = new User("John", 30);
        $this->profile = new Profile($this->user, "/img/john.jpg");
    }

    public function testItCanCreateUser()
    {
        $this->assertNotNull($this->user);
    }

    public function testItCanCreateProfile()
    {
        $this->assertNotNull($this->profile);
    }

    public function testICanAskUserForName()
    {
        $username = $this->profile->getUser()->getName();

        $this->assertEquals("John", $username);
    }

    public function testProfileCanTellUsername()
    {
        $username = $this->profile->getName();
        
        $this->assertEquals("John", $username);
    }
}
