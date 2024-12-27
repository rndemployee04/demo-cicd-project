<?php

namespace Tests\Feature;

use Tests\TestCase;

class TestControllerTest extends TestCase
{
    public function testTestRoute()
    {
        $response = $this->get('/test');
        $response->assertStatus(200);
        $response->assertSee('79');
    }
}