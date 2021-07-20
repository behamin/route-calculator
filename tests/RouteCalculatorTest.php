<?php

namespace Behamin\RouteCalculator\Tests;

use Behamin\RouteCalculator\RouteCalculator;
use PHPUnit\Framework\TestCase;

class RouteCalculatorTest extends TestCase
{
    
    /**
     * @test
     */
    public function itRoute()
    {
        $route = new RouteCalculator();
        $routeName = $route->getRoute('route 1');
        $this->assertSame('Route: route 1', $routeName);
    }
}
