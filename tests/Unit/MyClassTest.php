<?php

declare(strict_types=1);

namespace Elephant\ML\Tests\Unit;

use Elephant\ML\MyClass;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Elephant\ML\MyClass
 */
class MyClassTest extends TestCase
{
    public function testMethod(): void
    {
        $myClass = new MyClass();

        self::assertEquals('Hello world', $myClass->method());
    }
}
