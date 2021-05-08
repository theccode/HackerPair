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
    public function test_example()
    {
        $this->assertTrue(true);
    }

	public function testSomeValueFalse(){
		$this->assertFalse(false);
	}

	public function testSomeEqualValues(){
		$fullName = "Andane Daniel";
		$this->assertEquals("Andane Daniel", $fullName);
	}
	
	public function checkArrayLength(){
		$someArray = [5, 3, 8, 7, 4];
		$this->assertCount(5, $someArray);
	}
}
