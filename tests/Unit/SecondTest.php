<?php

namespace Tests\Unit;

use Tests\TestCase;

class SecondTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function testExample()
    {
        $this->get("/second")->assertStatus(200);
    }
}
