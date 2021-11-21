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
        for ($x = 0; $x < floor($len / 2); $x++) {
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
                if ($nums[$i] + $nums[$j] === $target && $i !== $j) {
                    return [$i, $j];
                }
            }
        }
        return null;
    }

    /**
     * @param Integer[] $homes
     * @return Integer
     * https://leetcode.com/problems/two-furthest-houses-with-different-colors/
     *  max distance between two houses with different colors
     */
    public static function maxDistance($homes)
    {
        // 1. get all color options
        print_r($colorsUni = array_unique($homes));
        $distArr = array_fill(0, count($colorsUni), 0);

        // 2. loop  over each color
        foreach ($colorsUni as $key => $color)
        {
            echo "Color: $color";
            $firstIndex = array_search($color, $homes); // first occurrence
            $lastIndex = count($homes) - 1;
            $dist = 0;


            for ($i = $lastIndex; $i > $firstIndex; $i--) {
                if ($homes[$i-1] != $color) {
                    $dist = $i - $firstIndex - 1; // find last occurrence
                    break;
                }
//                echo " | Dist: $dist";
            }
            echo " | Dist: $dist\n";


            $distArr[$key] = $dist;
        }

        print_r($distArr);
        print("Max dist: " . max($distArr) . "\n");
        return max($distArr);
    }
}

//                    Solution (from the discussion);
//                    for ($i = 0; $i < count($homes); $i++)
//                    {
//                        echo "iteration: $i\n";
//                        if ($homes[$i] === $homes[$i+1] ) {
//                              $d++;
//                              echo "diff color\n";
//                        } else {
//                            if ($d >= $r) $r = $d;
//                        }
//                        echo "Dist:$d | Result:$r\n";
//                    }
//                    $distArr[$key] = $r;


//                    if ( 1==1 ) {
//                    }
//
//                    $n = count($colors);
//                    do {
//                        $n--;
//                    } while ($n === 0);

//        for ($i = 0; $i < count($colors); $i++)
//        {
//            echo $colors[$i] . " -> " . $colors[$i-1] . "\n";
//        }
//        print_r($distArr);
//        echo(max($distArr) . "\n");
//        return max($distArr);

//        $distArr = array_fill(0,count($colors), 0);
//        print_r($colors);
//        for ($i = 0; $i < count($colors); $i++)
//        {
//            echo $colors[$i] . " -> " . $colors[$i-1] . "\n";
//            if ($colors[$i] == $colors[$i+1]) {
//                $distArr[$colors[$i]] = 1;
//            } else {
//                $distArr[$colors[$i]]++;
//            }
//        }
//        print_r($distArr);
//        echo(max($distArr) . "\n");
//        return max($distArr);
//    }
