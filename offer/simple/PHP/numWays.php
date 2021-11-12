<?php

// 剑指 Offer 10- II. 青蛙跳台阶问题

function numWays($n) {

    if ($n == 0) {
        return 1;
    }

    if ($n < 3) {
        return $n;
    }

    $a = 1;
    $b = 2;
    $c = 0;
    for ($i = 3; $i <= $n; $i++) {
        $c = ($a + $b) % 1000000007;
        $a = $b;
        $b = $c;
    }
    return $c;
}

var_dump(numWays(3));