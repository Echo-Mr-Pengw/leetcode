<?php

/**
 * 剑指 Offer 17. 打印从1到最大的n位数
 * @Author: pengwei
 * @Date:   2021-05-23 16:29:18
 * @Last Modified by:   pengwei
 */
function printNumbers($n) {
    $end = 10 ** $n - 1;
    return range(1, $end);
}