<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{


    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_that_name_is_jack()
    {
        $name = "John";
        // $name = "Jack";
        $this->assertTrue($name == "Jack");
    }
}
