<?php

declare(strict_types=1);

final class LeetArr
{
    /**
     * @param $s
     * @return mixed
     * https://leetcode.com/problems/reverse-string/
     */
    public static function array_reverse(&$s)
    {

        $len = count($s);
//        echo "\n   $s[0] | t=  | i=$len | " . implode(",", $s) . "\n";
        for ($x = 0; $x < floor($len/2); $x++) {
            $idx = $len - 1 - $x;
            $tmp = $s[$x];
            $s[$x] = $s[$idx];
            $s[$idx] = $tmp;
//            echo "$x: $s[$x] | t=$tmp | i=$idx | " . implode(",", $s) . "\n";
        }

// fix the middle part
//            if ($len % 2 == 0) {
//                // even
//                $tmp = $s[$len / 2];
//                $s[$len / 2] = $s[$len / 2 - 1];
//                $s[$len / 2 - 1] = $tmp;
//            } else {
//                // odd
//                $tmp = $s[floor($len / 2) - 1];
//                $s[floor($len / 2) - 1] = $s[floor($len / 2) + 1];
//                $s[floor($len / 2) + 1] = $tmp;
//            }

        echo "\n\n";
        return $s;
    }

    /**
     * @param array $nums
     * @param $target
     * @return int[]|null
     * https://leetcode.com/problems/two-sum
     */
    public static function addTwo(array $nums, $target)
    {
        for ($i = 0; $i < count($nums); $i++) {
            for ($j = 0; $j < count($nums); $j++) {
                if ($nums[$i]+$nums[$j]===$target && $i !== $j) {
                    return [$i, $j];
                }
            }
        }
        return null;
    }

}
