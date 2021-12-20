<?php

namespace CodeIgniter;

use CodeIgniter\Test\ControllerTestTrait;
use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\DatabaseTestTrait;

class TestFormat extends CIUnitTestCase
{
    use ControllerTestTrait, DatabaseTestTrait;

    public function testFormatDurasi()
    {
        $result = $this->controller(\App\Controllers\Api\Order::class)
                       ->execute('formatDurasi', 80);

        $this->assertTrue($result->isOK());
    }
}