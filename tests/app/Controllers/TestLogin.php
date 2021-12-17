<?php

use CodeIgniter\Test\DatabaseTestTrait;
use CodeIgniter\Test\FeatureTestTrait;
use CodeIgniter\Test\CIUnitTestCase;

class TestLogin extends CIUnitTestCase
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

    public function testIndex(){
        $result = $this->post('auth/login', [
            'id_user' => 'robbyakbar',
            'password' => '123qwe'
        ]);

        $result->assertOk();
        $result->assertTrue($result->getJSON() !== false);
        $result->assertJSONFragment([
            'status' => 200,
            'error' => false,
            'data' => [
                'id_user' => "1",
                'email' => "robbyakbar@upi.edu",
                'full_name' => "Robby Akbar"
            ]
        ]);
    }

}