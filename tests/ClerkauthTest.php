<?php
/**
 * Tests for ClerkAuth
 */

use PHPUnit\Framework\TestCase;
use Clerkauth\Clerkauth;

class ClerkauthTest extends TestCase {
    private Clerkauth $instance;

    protected function setUp(): void {
        $this->instance = new Clerkauth(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Clerkauth::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
