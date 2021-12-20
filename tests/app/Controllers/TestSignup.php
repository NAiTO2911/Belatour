<?php

use CodeIgniter\Test\DatabaseTestTrait;
use CodeIgniter\Test\FeatureTestTrait;
use CodeIgniter\Test\CIUnitTestCase;

class TestSignup extends CIUnitTestCase
{
    use DatabaseTestTrait, FeatureTestTrait;

    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    // public function testIndex(){
    //     $result = $this->post('auth/signup', [
    //         'full_name' => 'Robby Akbar',
    //         'email' => 'robbyakbar@upi.edu',
    //         'username' => 'robbyakbar',
    //         'phone_number' => '089666549850',
    //         'password' => '123qwe'
    //     ]);

    //     $result->assertStatus(500);
    //     $result->assertTrue($result->getJSON() !== false);
    //     $result->assertJSONFragment([
    //         'status' => 500,
    //         'error' => true,
    //         'data' => [
    //             'email' => 'Email entered is already registered.',
    //             'username' => 'User Name entered is already registered.',
    //             'phone_number' => 'Phone Number entered is already registered.'
    //         ]
    //     ]);
    // }

    public function testCheckUser()
    {
        $criteria = [
            'email'  => 'robbyakbar@upi.edu'
        ];
        $this->seeInDatabase('user', $criteria);
    }

    public function testIndex()
    {
        $result = $this->call('post', site_url('auth/signup'), [
            'full_name' => 'Richwan Hanivv',
            'email' => 'richwanhanivv@gmail.com',
            'username' => 'richwan',
            'phone_number' => '089988989898',
            'password' => 'richwan123'
        ]);

        $result->assertOk();
        $result->assertTrue($result->getJSON() !== false);
        $result->assertJSONFragment([
            'status' => 200,
            'error' => false,
            'data' => "User Account Created Successfully"
        ]);
    }
}
