<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;

final class TestTwoSum extends TestCase
{
    private $arr;

    protected function setUp(): void
    {

    }

    public function testAdd(): void
    {
        $this->assertEquals([0, 1], LeetArr::addTwo([2,7,11,15], 9),'Example 1');
        $this->assertEquals([1, 2], LeetArr::addTwo([3,2,4], 6),'Example 2');
        $this->assertEquals([0, 1], LeetArr::addTwo([3,3], 6),'Example 3');
    }

}
