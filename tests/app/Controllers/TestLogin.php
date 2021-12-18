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

    public function testIndex1()
    {
        $result = $this->post('auth/login', [
            'id_user' => 'dev_belatour',
            'password' => 'beladev'
        ]);

        $result->assertOK();
        $result->assertTrue($result->getJSON() !== false);
        $result->assertJSONFragment([
            'status' => 200,
            'error' => false,
            'data' => [
                'id_user' => "91",
                'email' => "dev@belatour.com",
                'full_name' => "Developer Belatour"
            ]
        ]);
    }

    public function testIndex2()
    {
        $result = $this->post('auth/login', [
            'id_user' => 'dev_belatour',
            'password' => 'beladevs'
        ]);

        $result->assertOK();
        $result->assertTrue($result->getJSON() !== false);
        $result->assertJSONFragment([
            'status' => 200,
            'error' => true,
            'data' => [
                'message' => "Your Password is Wrong"
            ]
        ]);
    }
    public function testIndex3()
    {
        $result = $this->post('auth/login', [
            'id_user' => 'dev_belatours',
            'password' => 'beladevs'
        ]);

        $result->assertStatus(401);
        $result->assertTrue($result->getJSON() !== false);
        $result->assertJSONFragment([
            'status' => 401,
            'error' => true,
            'data' => [
                'message' => "User Not Found"
            ]
        ]);
    }
}
