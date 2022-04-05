<?php

namespace App\Services;

class TestServivce
{
    private DependencyService $dependencyService;
    public function __construct(DependencyService $dependencyService)
    {
        $this->dependencyService = $dependencyService;
    }

    public function createSomething(string $test): string
    {
        $result = $this->dependencyService->testingInjection($test);
        return $result . ' working';
    }
}
