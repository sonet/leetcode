<?php
declare(strict_types=1);
require 'vendor/autoload.php';
use PHPUnit\Framework\TestCase;

final class TestIsPlaindrome extends TestCase
{
    public function testIsPlaindrom(): void
    {
        $this->assertTrue(LeetArr::isPalindrome(121), 'Example 1: 121');
        $this->assertFalse(LeetArr::isPalindrome(-121), 'Example 2: -121');
        $this->assertFalse(LeetArr::isPalindrome(10), 'Example 3: 10');
        $this->assertFalse(LeetArr::isPalindrome(-101), 'Example 4: -101');
    }

}
