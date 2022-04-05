<?php

namespace Tests\Unit;

use App\Services\DependencyService;
use App\Services\TestServivce;
use PHPUnit\Framework\TestCase;

class MockTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_mock_example()
    {
        $dependencyService = $this->createMock(DependencyService::class);
        $dependencyService->expects($this->exactly(1))
            ->method('testingInjection')
            ->with('test')
            ->willReturn('test');

        $testService = new TestServivce($dependencyService);
        $this->assertTrue($testService->createSomething('test') == 'test working');
    }
}
