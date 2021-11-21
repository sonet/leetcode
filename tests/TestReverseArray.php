<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;

final class TestReverseArray extends TestCase
{
    private $arr;

    protected function setUp(): void
    {

    }

    public function testReverse(): void
    {
        $s = ["h", "a", "l", "l", "o"]; // 5
        $this->assertEquals('o,l,l,a,h', implode(',',LeetArr::array_reverse($s)) );

        $s = ["H","a","n","n","a","h"]; // 6
        $this->assertEquals('h,a,n,n,a,H', implode(',',LeetArr::array_reverse($s)) );

        $s = ["H","a"," ","n","a","h"]; // 6
        $this->assertEquals('h,a,n, ,a,H', implode(',',LeetArr::array_reverse($s)) );

        $s = ["A"," ","m","a","n",","," ","a"]; // 9
        $this->assertEquals('a, ,,,n,a,m, ,A', implode(',',LeetArr::array_reverse($s)) );

        $s = ["A"," ","m","a","n",","," "];
        $this->assertEquals(' ,,,n,a,m, ,A', implode(',',LeetArr::array_reverse($s)) );

        $s = ["A","B","C","D","E","F","G","H"]; // 8
        $this->assertEquals('H,G,F,E,D,C,B,A', implode(',',LeetArr::array_reverse($s)) );

        $s = ["A","B","C","D","E","F","G","H","I"]; // 9
        $this->assertEquals('I,H,G,F,E,D,C,B,A', implode(',',LeetArr::array_reverse($s)) );

        $s = ["A"," ","m","a","n",","," ","a"," ","p","l","a","n",","," ","a"," ","c","a","n","a","l",":"," ","P","a","n","a","m","a"]; // many
        $this->assertEquals('a,m,a,n,a,P, ,:,l,a,n,a,c, ,a, ,,,n,a,l,p, ,a, ,,,n,a,m, ,A', implode(',',LeetArr::array_reverse($s)) );

        $s = ["a","."]; // 2
        $this->assertEquals('.,a', implode(',',LeetArr::array_reverse($s)) );

    }

}
