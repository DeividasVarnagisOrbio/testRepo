<?php

namespace App\Services;

class DependencyService
{
    public function testingInjection(string $test): string
    {
        return $test;
    }
}
