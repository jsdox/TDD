<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

class ExampleTest extends TestCase
{
    use WithFaker, RefreshDatabase;
    
    public function setUp(): void {
        parent::setUp();
        $this->data = ['name' => $this->faker->name, 'email' => $this->faker->email, 'password' => $this->faker->password];
    }
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testHelloWorld() {
        $this->assertTrue(true);
        $this->assertFalse(false);
        $this->assertNotEmpty(['hello']);
        $this->assertEquals(true, true);
    }

//    public function testLogin()
//    {
//
//    }


}
