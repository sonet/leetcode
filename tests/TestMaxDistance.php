<?php
declare(strict_types=1);
require 'vendor/autoload.php';
use PHPUnit\Framework\TestCase;

final class TestMaxDistance extends TestCase
{

    public function testMaxDist(): void
    {
        $this->assertEquals(3, LeetArr::maxDistance([1,1,1,6,1,1,1]),'Example 1');
        $this->assertEquals(4, LeetArr::maxDistance([1,8,3,8,3]),'Example 2');
        $this->assertEquals(1, LeetArr::maxDistance([0,1]),'Example 3');

    }

}
