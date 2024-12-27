<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\TestController;

class TestControllerTest extends TestCase
{
    public function testTestFunction()
    {
        $controller = new TestController();
        $result = $controller->test();
        $this->assertEquals(34, $result);
    }
}