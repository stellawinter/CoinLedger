<?php
/**
 * Tests for CoinLedger
 */

use PHPUnit\Framework\TestCase;
use Coinledger\Coinledger;

class CoinledgerTest extends TestCase {
    private Coinledger $instance;

    protected function setUp(): void {
        $this->instance = new Coinledger(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Coinledger::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
