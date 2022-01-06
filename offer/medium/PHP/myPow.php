<?php
// 剑指 Offer 16. 数值的整数次方
// 实现 pow(x, n) ，即计算 x 的 n 次幂函数（即，xn）。
// 不得使用库函数，同时不需要考虑大数问题。

function myPow($x, $n)
{
    if ($n < 0) {
        $x = 1 / $x;
        $x = -$x;
    }

    $result = 1;
    while ($n > 0) {
        if ($n & 1) {
            $result *= $x;
        }
        $x *= $x;
        $n >>= 1;
    }
    return $result;
}

var_dump(myPow(2, 3));