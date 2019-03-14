<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 3/13/2019
 * Time: 2:37 PM
 */

use PHPUnit\Framework\TestCase;
require '../php/loginLogic.php';

class loginTest extends TestCase
{

    public function testLoginValidInfo()
    {
        $loginTester = new loginLogic();

        $this ->assertTrue($loginTester->LoginDB("password","example@gmail.com"), "Test login with valid info");
    }
    public function testLoginInvalidPass()
    {
        $loginTester = new loginLogic();

        $this ->assertTrue($loginTester->LoginDB("bad","example@gmail.com"), "Test Login fails with invalid password");
    }

    public function testLoginInvalidEmail()
    {
        $loginTester = new loginLogic();

        $this ->assertTrue($loginTester->LoginDB("password","this is not a email"), "Test Login fails with invalid email");
    }

    /** @test  */
    public function testConnectDB()
    {
        $loginTester = new loginLogic();

        $this ->assertNotNull($loginTester->connectDB(), "Test that the connection is not null");
    }
}
