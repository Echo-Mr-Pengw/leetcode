<?php

// 剑指 Offer 14- II. 剪绳子

function cuttingRope2($n)
{
    if ($n < 4) {
        return $n - 1;
    }

    $result = 1;
    while ($n > 4) {
        $result *= 3;
        $n -= 3;
    }
    return $result * $n;
}

echo cuttingRope2(5);

